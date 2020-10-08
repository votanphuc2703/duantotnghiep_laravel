<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->id();
            $table->string('nameMovie');
            $table->text('introductionMovie');
            $table->text('descriptionMovie');
            $table->text('caster');
            $table->string('director');
            $table->string('genreMovie');
            $table->string('countryMovie');
            $table->string('releaseDate');
            $table->string('minAge');
            $table->string('image');
            $table->text('imageList');
            $table->text('linkTrailer');
            $table->string('priceSingleSeat');
            $table->string('priceDoubleSeat');
            $table->string('active');
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
        Schema::dropIfExists('movie');
    }
}
