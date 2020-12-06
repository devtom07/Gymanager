<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pt', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('name');
            $table->integer('id_card');
            $table->date('issued_on');
            $table->string('issued_by');
            $table->string('gender');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->string('status');
            $table->string('contract');
            $table->date('start_day');
            $table->date('end_day');
            $table->string('avatar');
            $table->integer('wage');
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
        Schema::dropIfExists('pt');
    }
}
