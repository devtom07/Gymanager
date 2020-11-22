<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkSiftStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_sift_staffs', function (Blueprint $table) {
            $table->id(); //khóa chính
            $table->integer('work_sift_id');
            // $table->foreign('work_sift_id')->references('id')->on('work_sifts');

            $table->integer('staff_id');
            // $table->foreign('staff_id')->references('id')->on('staffs');

            $table->date('date_start');
            $table->date('date_end');
            $table->string('cycle');
            $table->string('work_schedule_name');
            // $table->foreign('staff_id')->references('id')->on('staffs');
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
        Schema::dropIfExists('work_sift_staffs');
    }
}