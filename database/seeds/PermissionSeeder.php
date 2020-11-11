<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //user
        DB::table('permissions')->insert([
         'name' => 'list user',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'add user',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit user',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete user',
            'guard_name' => 'web'
        ]);
        //staff
        DB::table('permissions')->insert([
            'name' => 'list staff',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'add staff',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'edit staff',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'delete staff',
            'guard_name' => 'web'
        ]);
    }
}
