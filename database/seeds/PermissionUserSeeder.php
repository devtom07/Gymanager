<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_permissions')->insert([
         'permission_id' => '5',
            'model_type' => 'App\User',
            'model_id' => '2'
        ]);
        DB::table('model_has_permissions')->insert([
            'permission_id' => '6',
            'model_type' => 'App\User',
            'model_id' => '2'
        ]);
        DB::table('model_has_permissions')->insert([
            'permission_id' => '7',
            'model_type' => 'App\User',
            'model_id' => '2'
        ]);
        DB::table('model_has_permissions')->insert([
            'permission_id' => '8',
            'model_type' => 'App\User',
            'model_id' => '2'
        ]);
    }
}
