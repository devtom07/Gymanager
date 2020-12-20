<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachingSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachingSchedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hymnal');
            $table->foreign('id_hymnal')->references('id')->on('hymnals');
            $table->date('date');
            $table->unsignedBigInteger('id_customer');
            $table->foreign('id_customer')->references('id')->on('customers');
            $table->unsignedBigInteger('id_pt');
            $table->foreign('id_pt')->references('id')->on('staffs');
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
        Schema::dropIfExists('teachingSchedules');
    }
}
