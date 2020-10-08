<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderticketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderticket', function (Blueprint $table) {
            $table->id();
            $table->string('qty');
            $table->string('food');
            $table->string('total');
            $table->timestamps();
        });
        Schema::table('orderticket', function(Blueprint $table) {
            $table->bigInteger('idShowTime')->unsigned()->nullable();
            $table->foreign('idShowTime')->references('id')->on('showtime')->onDelete('cascade');
            $table->bigInteger('idUser')->unsigned()->nullable();
            $table->foreign('idUser')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderticket');
    }
}
