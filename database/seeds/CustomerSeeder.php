<?php

use Illuminate\Database\Seeder;
use App\Models\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   Customer::insert([
       'code' => 'KH0001',
       'name' => 'Nguyễn Văn Hoàng',
       'sex' => 'nam',
       'phone' => '0344560381',
       'contract_code' => '13123',
       'identity_card' => '131233123',
       'level' => 'học viên',
       'address' => 'Hoàng Mai - Hà Nội - Việt Nam',
       'email' => 'Hoangtt6@gmail.com',
       'note' => 'Học viên mới'
   ]);
        Customer::insert([
            'code' => 'KH0002',
            'name' => 'Nguyễn Văn Sơn',
            'sex' => 'nam',
            'phone' => '0344560381',
            'contract_code' => '13123',
            'identity_card' => '131233123',
            'level' => 'học viên',
            'address' => 'Hoàng Mai - Hà Nội - Việt Nam',
            'email' => 'Son22@gmail.com',
            'note' => 'Học viên mới'
        ]);
        Customer::insert([
            'code' => 'KH0003',
            'name' => 'Nguyễn Văn Quang',
            'sex' => 'nam',
            'phone' => '0344560381',
            'contract_code' => '13123',
            'identity_card' => '131233123',
            'level' => 'học viên',
            'address' => 'Hoàng Mai - Hà Nội - Việt Nam',
            'email' => 'Quang22@gmail.com',
            'note' => 'Học viên mới'
        ]);
    }
}
