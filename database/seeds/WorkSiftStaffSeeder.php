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
           'date_end' => '2020-01-19',
           'cycle' => 'Tuần',
           'work_schedule_name' => 'Nhân viên bán hàng'
       ]);
        WorkSiftStaff::create([
            'work_sift_id' => '2',
            'staff_id' => '2',
            'date_start' => '2020-01-12',
            'date_end' => '2020-02-12',
            'cycle' => 'Tháng',
            'work_schedule_name' => 'Xem lịch tập của khách'
        ]);
        WorkSiftStaff::create([
            'work_sift_id' => '2',
            'staff_id' => '3',
            'date_start' => '2020-01-12',
            'date_end' => '2021-01-12',
            'cycle' => 'Năm',
            'work_schedule_name' => 'Quản lý nhân viên'
        ]);
        WorkSiftStaff::create([
            'work_sift_id' => '1',
            'staff_id' => '3',
            'date_start' => '2020-01-12',
            'date_end' => '2021-01-12',
            'cycle' => 'Năm',
            'work_schedule_name' => 'Chăm sóc khách hàng'
        ]);
    }
}
