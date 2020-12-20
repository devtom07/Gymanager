
<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PositionSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            RolePermissionSeeder::class,
            RoleUserSeeder::class,
            PermissionUserSeeder::class,
            StaffSeeder::class,
            UserSeeder::class,
            CustomerAccountSeeder::class,
            CustomerSeeder::class,
            PackageSeeder::class,
            HymnalSeeder::class,
            WorkSiftsSeeder::class,
            WorkSiftStaffSeeder::class,
        ]);
    }
}
