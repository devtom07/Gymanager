<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_members', function (Blueprint $table) {
            $table->id();
            $table->string('name_member');
            $table->string('phone');
            $table->string('service');
            $table->string('email');
            $table->text('content');
            $table->tinyInteger('statuss')->default('0');
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
        Schema::dropIfExists('new_members');
    }
}