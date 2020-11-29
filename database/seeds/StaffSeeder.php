<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('staffs')->insert([
         'code' => substr(md5(microtime()), rand(0, 26), 5),
         'name' => 'Nguyễn Đức Mạnh',
         'phone' => '0344560381',
         'email' => 'manhndph08881@fpt.edu.vn',
         'address' => 'Hà Nội việt Nam' ,
         'status' => 'Đi làm' ,
         'contract' => 'Hợp đồng lao động',
         'wage' => '1000000',
         'title' => 'Quản lý chính',
     ]);
        DB::table('staffs')->insert([
            'code' => substr(md5(microtime()), rand(0, 26), 5),
            'name' => 'Lê Đức Hoành',
            'phone' => '0337019846',
            'email' => 'hoanhldph08751@fpt.edu.vn',
            'address' => 'Hà Nội việt Nam' ,
            'status' => 'Đi làm' ,
            'contract' => 'Hợp đồng lao động',
            'wage' => '1000000',
            'title' => 'Quản lý khách hàng',


        ]);
        DB::table('staffs')->insert([
            'code' => substr(md5(microtime()), rand(0, 26), 5),
            'name' => 'Nguyễn Hữu Tiến',
            'phone' => '0392146603',
            'email' => 'Tiennhph08978@fpt.edu.vn',
            'address' => 'Hà Nội việt Nam' ,
            'status' => 'Đi làm' ,
            'contract' => 'Hợp đồng lao động',
            'wage' => '1000000',
            'title' => 'PT',

        ]);
        DB::table('staffs')->insert([
            'code' => substr(md5(microtime()), rand(0, 26), 5),
            'name' => 'Phan Tuấn Anh',
            'phone' => '0944194857',
            'email' => 'anhptph07858@fpt.edu.vn ',
            'address' => 'Hà Nội việt Nam' ,
            'status' => 'Đi làm' ,
            'contract' => 'Hợp đồng lao động',
            'wage' => '1000000',
            'title' => 'Quản lý tài chính',

        ]);
        DB::table('staffs')->insert([
            'code' => substr(md5(microtime()), rand(0, 26), 5),
            'name' => 'Trần Văn Long',
            'phone' => '0967861842',
            'email' => 'Longdvph08895@fpt.edu.vn',
            'address' => 'Hà Nội việt Nam' ,
            'status' => 'Đi làm' ,
            'contract' => 'Hợp đồng lao động',
            'wage' => '1000000',
            'title' => 'Quản lý dịch vụ',


        ]);
    }
}
