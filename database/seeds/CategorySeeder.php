<?php

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Category::insert([
       'name' => 'Nước',
   		]);
   		Category::insert([
       'name' => 'Đồ ăn vặt',
   		]);
   		Category::insert([
       'name' => 'Dụng cụ phụ tập',
   		]);
    }
}
