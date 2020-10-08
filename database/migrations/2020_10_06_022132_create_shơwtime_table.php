<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShơwtimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showtime', function (Blueprint $table) {
            $table->id();
            $table->string('dateShow');
            $table->string('startTime');
            $table->timestamps();
        });
        Schema::table('showtime', function(Blueprint $table) {
            $table->bigInteger('idMovie')->unsigned()->nullable();
            $table->foreign('idMovie')->references('id')->on('movie')->onDelete('cascade');
            $table->bigInteger('idRoom')->unsigned()->nullable();
            $table->foreign('idRoom')->references('id')->on('room')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('showtime');
    }
}
