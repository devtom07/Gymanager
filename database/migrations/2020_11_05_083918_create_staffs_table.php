<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->string('code');
=======
            $table->string('code')->nullable();
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
            $table->string('name');
            $table->string('gender');
            $table->integer('phone');
            $table->string('email');
            $table->string('address');
            $table->string('status');
            $table->string('contract');
            $table->string('avatar')->nullable();
            $table->integer('wage');
<<<<<<< HEAD
            $table->string('title');
=======
            $table->foreign('title')->references('id')->on('title');
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
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
        Schema::dropIfExists('staffs');
    }
}
<<<<<<< HEAD

=======
>>>>>>> 9fa171c0de55c2e6808dd3c84ab6e998d0940244
