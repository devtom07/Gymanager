
<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'nhanvien',
            'email' => 'nhanvien@gmail.com',
            'password' => Hash::make('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'nhanvien1',
            'email' => 'nhanvien1@gmail.com',
            'password' => Hash::make('123456'),
        ]);
    }
}

