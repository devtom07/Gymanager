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
         'name' => 'xem tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'thêm tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa tài khoản',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa tài khoản',
            'guard_name' => 'web'
        ]);
        //staff
        DB::table('permissions')->insert([
            'name' => 'Xem nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Thêm nhân viên',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Sửa nhân viên ',
            'guard_name' => 'web'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Xóa nhân viên',
            'guard_name' => 'web'
        ]);
    }
}
