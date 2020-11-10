<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
      'name' => 'User',
      'title' => 'quanlytaikhoan'
        ]);
        DB::table('permissions')->insert([
            'name' => 'Staff',
            'title' => 'quanlynhanvien'
              ]);
    }
}
