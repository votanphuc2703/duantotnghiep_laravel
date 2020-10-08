<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderticketdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderticketdetail', function (Blueprint $table) {
            $table->id();
            $table->string('priceticket');
            $table->timestamps();
        });
        Schema::table('orderticketdetail', function(Blueprint $table) {
            $table->bigInteger('idOrder')->unsigned()->nullable();
            $table->foreign('idOrder')->references('id')->on('orderticket')->onDelete('cascade');
            $table->bigInteger('idTicket')->unsigned()->nullable();
            $table->foreign('idTicket')->references('id')->on('ticket')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderticketdetail');
    }
}
