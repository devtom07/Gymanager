<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
       		'name' => 'Chanh muối',
           	'cate_id' => '1',
           	// 'avatar' => '',
           	'price' => '10000',
           	'quantitiy' => '100',
           	'sale_price	' => '0',
           	'detail' => 'chai nước ngon!'
       ]);
        Product::create([
       		'name' => 'Nước lọc',
           	'cate_id' => '1',
           	// 'avatar' => '',
           	'price' => '5000',
           	'quantitiy' => '70',
           	'sale_price	' => '0',
           	'detail' => 'chai nước ngon!'
       ]);
        Product::create([
       		'name' => 'BimBim',
           	'cate_id' => '2',
           	// 'avatar' => '',
           	'price' => '8000',
           	'quantitiy' => '100',
           	'sale_price	' => '0',
           	'detail' => 'Rất ngon ngon!'
       ]);
        Product::create([
       		'name' => 'Găng tay tập gym',
           	'cate_id' => '3',
           	// 'avatar' => '',
           	'price' => '50000',
           	'quantitiy' => '100',
           	'sale_price	' => '0',
           	'detail' => 'Găng tay tốt!'
       ]);
    }
}
