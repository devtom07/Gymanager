<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->insert([
         'permission_id' => '5',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '6',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '7',
            'role_id' => '2'
        ]);
        DB::table('role_has_permissions')->insert([
            'permission_id' => '8',
            'role_id' => '2'
        ]);

    }
}
