<?php

use Illuminate\Database\Seeder;

class CustomerAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'tiennh08978',
            'email' => 'tiennh08978@gmail.com',
            'password' =>\Illuminate\Support\Facades\Hash::make('12345678'),
            'status'=>'hoat dong',
            'id_customer'=>'1',
        ];
        \Illuminate\Support\Facades\DB::table('customer_accounts')->insert($data);
    }
}
