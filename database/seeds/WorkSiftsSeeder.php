<?php

use Illuminate\Database\Seeder;
use App\Models\WorkSift;
class WorkSiftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkSift::create([
            'name' => 'ca1',
            'hour_start' => '5:00',
            'hour_start_center' => '09:00',
            'hour_end_center' => '09:30',
            'hour_end' =>  '12:00',
            'status' => 'Còn hiệu lực'
        ]);
        WorkSift::create([
            'name' => 'ca2',
            'hour_start' => '12:05',
            'hour_start_center' => '15:00',
            'hour_end_center' => '15:30',
            'hour_end' =>  '20:00',
            'status' => 'Còn hiệu lực'
        ]);
    }
}
