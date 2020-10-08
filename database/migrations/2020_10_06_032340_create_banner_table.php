<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->text('description');
            $table->string('active');
            $table->timestamps();
        });
        Schema::table('banner', function(Blueprint $table) {
            $table->bigInteger('idGallery')->unsigned()->nullable();
            $table->foreign('idGallery')->references('id')->on('gallerybanner')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banner');
    }
}
