<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sifts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->dateTime('hour_start');
            $table->dateTime('hour_start_center');
            $table->dateTime('hour_end_center');
            $table->dateTime('hour_end');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('work_sifts');
    }
}
