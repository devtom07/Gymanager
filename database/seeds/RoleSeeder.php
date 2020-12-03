<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
         'name' => 'Super Admin',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'name' => 'Admin',
            'guard_name' => 'web'
        ]);
        DB::table('roles')->insert([
            'name' => 'pt',
            'guard_name' => 'web'
        ]);
    }
}
