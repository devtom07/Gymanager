<?php

use Illuminate\Database\Seeder;
use App\Models\WorkSiftStaff;
class WorkSiftStaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       WorkSiftStaff::create([
       'work_sift_id' => '1',
           'staff_id' => '1',
           'date_start' => '2020-01-12',
           'date_end' => '2022-04-12',
           'cycle' => 'Tuần',
           'work_schedule_name' => 'ca1'
       ]);
        WorkSiftStaff::create([
            'work_sift_id' => '2',
            'staff_id' => '2',
            'date_start' => '2020-01-12',
            'date_end' => '2022-04-12',
            'cycle' => 'Tuần',
            'work_schedule_name' => 'ca2'
        ]);
    }
}
