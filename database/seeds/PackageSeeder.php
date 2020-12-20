<?php

use Illuminate\Database\Seeder;
use App\Models\Package;
class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Package::create([
            'name' => 'Gói 1',
            'price' => '10000',
            'type_use' => 'Ngày',
            'free_service' => 'nước lọc',
            'start_date' => '2020-12-01',
            'end_date' => '2021-01-01',
            'desc' => 'note',
            'status' => 'Hoạt động'
        ]);
        Package::create([
            'name' => 'Gói 2',
            'price' => '20000',
            'type_use' => 'Tháng',
            'free_service' => 'nước lọc',
            'start_date' => '2020-12-01',
            'end_date' => '2021-01-01',
            'desc' => 'note',
            'status' => 'Hoạt động'
        ]);
        Package::create([
            'name' => 'Gói 3',
            'price' => '30000',
            'type_use' => 'năm',
            'free_service' => 'nước lọc',
            'start_date' => '2020-12-01',
            'end_date' => '2021-01-01',
            'desc' => 'note',
            'status' => 'Hoạt động'
        ]);
        Package::create([
            'name' => 'Gói 4',
            'price' => '30000',
            'type_use' => 'tuần',
            'free_service' => 'nước lọc',
            'start_date' => '2020-12-01',
            'end_date' => '2021-01-01',
            'desc' => 'note',
            'status' => 'Hoạt động'
        ]);
    }
}
