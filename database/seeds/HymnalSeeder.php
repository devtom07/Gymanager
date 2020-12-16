<?php

use Illuminate\Database\Seeder;
use App\Models\Hymnal;
class HymnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hymnal::create([
            'code' => 'CT001',
            'name' => 'ca1',
            'start_hour' => '05:30',
            'end_hour' => '07:30',
            'describe' => 'ghi chu'
        ]);
        Hymnal::create([
            'code' => 'CT002',
            'name' => 'ca2',
            'start_hour' => '07:35',
            'end_hour' => '09:35',
            'describe' => 'ghi chu'
        ]);
        Hymnal::create([
            'code' => 'CT003',
            'name' => 'ca3',
            'start_hour' => '15:30',
            'end_hour' => '17:30',
            'describe' => 'ghi chu'
        ]);
        Hymnal::create([
            'code' => 'CT004',
            'name' => 'ca4',
            'start_hour' => '17:35',
            'end_hour' => '19:35',
            'describe' => 'ghi chu'
        ]);
        Hymnal::create([
            'code' => 'CT005',
            'name' => 'ca5',
            'start_hour' => '19:40',
            'end_hour' => '21:40',
            'describe' => 'ghi chu'
        ]);
    }
}
