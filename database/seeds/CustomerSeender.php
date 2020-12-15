<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Eloquent\Model;

class CustomerSeender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	'name'=>'Nguyễn Hữu Tiến',
        	'phone'=>'0392146603',
        	'contract_code'=>'ACVD0312',
        	'email'=>'tiennh08978@gmail.com',
        	'sex'=>'nam',
        	'identity_card'=>'003141020012',
        	'leve'=>1,
        	'address'=>'Tien Yen-Hoai Duc-HaNoi',
        	'note'=>'Dep trai'
        ];
        DB::table('customers')->insert($data);
    }
}
