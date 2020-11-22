<?php declare(strict_types = 1);
/*
 * This file is part of PharIo\Version.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PharIo\Version;

class VersionConstraintParser {
    /**
     * @param string $value
     *
     * @throws UnsupportedVersionConstraintException
     */
    public function parse($value): VersionConstraint {
        if (\strpos($value, '||') !== false) {
            return $this->handleOrGroup($value);
        }

        if (!\preg_match('/^[\^~*]?v?[\d.*]+(?:-.*)?$/i', $value)) {
            throw new UnsupportedVersionConstraintException(
                \sprintf('Version constraint %s is not supported.', $value)
            );
        }

        switch ($value[0]) {
            case '~':
                return $this->handleTildeOperator($value);
            case '^':
                return $this->handleCaretOperator($value);
        }

        $version = new VersionConstraintValue($value);

        if ($version->getMajor()->isAny()) {
            return new AnyVersionConstraint();
        }

        if ($version->getMinor()->isAny()) {
            return new SpecificMajorVersionConstraint(
                $version->getVersionString(),
                $version->getMajor()->getValue()
            );
        }

        if ($version->getPatch()->isAny()) {
            return new SpecificMajorAndMinorVersionConstraint(
                $version->getVersionString(),
                $version->getMajor()->getValue(),
                $version->getMinor()->getValue()
            );
        }

        return new ExactVersionConstraint($version->getVersionString());
    }

    /**
     * @param $value
     */
    private function handleOrGroup($value): OrVersionConstraintGroup {
        $constraints = [];

        foreach (\explode('||', $value) as $groupSegment) {
            $constraints[] = $this->parse(\trim($groupSegment));
        }

        return new OrVersionConstraintGroup($value, $constraints);
    }

    /**
     * @param string $value
     */
    private function handleTildeOperator($value): AndVersionConstraintGroup {
        $version     = new Version(\substr($value, 1));
        $constraints = [
            new GreaterThanOrEqualToVersionConstraint($value, $version)
        ];

        if ($version->getPatch()->isAny()) {
            $constraints[] = new SpecificMajorVersionConstraint(
                $value,
                $version->getMajor()->getValue()
            );
        } else {
            $constraints[] = new SpecificMajorAndMinorVersionConstraint(
                $value,
                $version->getMajor()->getValue(),
                $version->getMinor()->getValue()
            );
        }

        return new AndVersionConstraintGroup($value, $constraints);
    }

    /**
     * @param string $value
     */
    private function handleCaretOperator($value): AndVersionConstraintGroup {
        $version = new Version(\substr($value, 1));

        return new AndVersionConstraintGroup(
            $value,
            [
                new GreaterThanOrEqualToVersionConstraint($value, $version),
                new SpecificMajorVersionConstraint($value, $version->getMajor()->getValue())
            ]
        );
    }
}
