<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomerAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'name' => 'tiennh08978',
        	'email' => 'tiennh08978@gmail.com',
        	'password' =>Hash::make('12345678'),
        	'status'=>'hoat dong',
        	'id_customer'=>'1',
        ];
        DB::table('customer_accounts')->insert($data);
    }
}
