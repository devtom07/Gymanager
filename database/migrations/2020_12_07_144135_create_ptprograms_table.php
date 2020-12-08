<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtprogramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ptprograms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->date('day_contract');
            $table->integer('number_sessions');
            $table->integer('total');
            $table->integer('money_paid');
            $table->date('start_date');
            $table->string('status');
            $table->unsignedBigInteger('pt_id');
            $table->foreign('pt_id')->references('id')->on('staffs');
            $table->string('contract_code');
            $table->time('time');
            $table->string('pay');
            $table->string('bank_account')->nullable();
            $table->integer('still_owe');
            $table->date('end_date');
            $table->unsignedBigInteger('package_id');
            $table->foreign('package_id')->references('id')->on('packages');
            $table->string('schedule');
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
        Schema::dropIfExists('ptprograms');
    }
}
