<?php


use App\Models\Position;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Position::create([
            'name' => 'Huấn luyện viên',
        ]);
        Position::create([
            'name' => 'Quản lý kho',
        ]);
        Position::create([
            'name' => 'Markettiong',
        ]);
        Position::create([
            'name' => 'Sale',
        ]);
    }
}