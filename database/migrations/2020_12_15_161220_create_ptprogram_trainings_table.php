<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtprogramTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptprogram_trainings', function (Blueprint $table) {
            $table->unsignedBigInteger('id_training');
            $table->foreign('id_training')->references('id')->on('trainings');
            $table->unsignedBigInteger('id_ptprogram');
            $table->foreign('id_ptprogram')->references('id')->on('ptprograms');
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
        Schema::dropIfExists('ptprogram_trainings');
    }
}
