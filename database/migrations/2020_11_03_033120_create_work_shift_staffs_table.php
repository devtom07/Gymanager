<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkShiftStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_shift_staffs', function (Blueprint $table) {
            $table->increments('id'); //khóa chính
            $table->foreign('id_staff')->references('id')->on('staff')->onDelete('cascade');
            $table->foreign('id_work_shift')->references('id')->on('work_shaft')->onDelete('cascade');
            $table->date('date_start');
            $table->date('date_end');
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
        Schema::dropIfExists('work_shift_staff');
    }
}
