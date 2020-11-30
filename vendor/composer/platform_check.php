<?php

// platform_check.php @generated by Composer

$issues = array();

if (!(PHP_VERSION_ID >= 70300)) {
    $issues[] = 'Your Composer dependencies require a PHP version ">= 7.3.0". You are running ' . PHP_VERSION  .  '.';
}

$missingExtensions = array();
extension_loaded('ctype') || $missingExtensions[] = 'ctype';
extension_loaded('dom') || $missingExtensions[] = 'dom';
extension_loaded('fileinfo') || $missingExtensions[] = 'fileinfo';
extension_loaded('filter') || $missingExtensions[] = 'filter';
extension_loaded('gd') || $missingExtensions[] = 'gd';
extension_loaded('iconv') || $missingExtensions[] = 'iconv';
extension_loaded('json') || $missingExtensions[] = 'json';
extension_loaded('libxml') || $missingExtensions[] = 'libxml';
extension_loaded('mbstring') || $missingExtensions[] = 'mbstring';
extension_loaded('openssl') || $missingExtensions[] = 'openssl';
extension_loaded('phar') || $missingExtensions[] = 'phar';
extension_loaded('simplexml') || $missingExtensions[] = 'simplexml';
extension_loaded('tokenizer') || $missingExtensions[] = 'tokenizer';
extension_loaded('xml') || $missingExtensions[] = 'xml';
extension_loaded('xmlreader') || $missingExtensions[] = 'xmlreader';
extension_loaded('xmlwriter') || $missingExtensions[] = 'xmlwriter';
extension_loaded('zip') || $missingExtensions[] = 'zip';
extension_loaded('zlib') || $missingExtensions[] = 'zlib';

if ($missingExtensions) {
    $issues[] = 'Your Composer dependencies require the following PHP extensions to be installed: ' . implode(', ', $missingExtensions);
}

if ($issues) {
    echo 'Composer detected issues in your platform:' . "\n\n" . implode("\n", $issues);
    exit(104);
}
