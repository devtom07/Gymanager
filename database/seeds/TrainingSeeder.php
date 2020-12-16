<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 2'
              ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 3'
            ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 4'
            ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 5'
            ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 6'
            ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Thứ 7'
            ]);
        DB::table('trainings')
            ->insert([
                'name' => 'Chủ nhật'
            ]);
    }
}
