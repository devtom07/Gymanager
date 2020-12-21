<?php

use App\Models\Cate_posts;
use Illuminate\Database\Seeder;

class CatePostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cate_posts::create([
           'name' => 'Các Thực phẩm tốt cho khỏe',
           
        ]);
        Cate_posts::create([
            'name' => 'Những thói quen sống tích cực',
            
         ]);
       
    }
}
