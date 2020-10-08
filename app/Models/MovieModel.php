<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieModel extends Model
{
    use HasFactory;
    protected $table='movie';
    protected $fillable=['nameMovie','introductionMovie','descriptionMovie','caster','director','genreMovie','countryMovie','releaseDate','minAge','image','imageList','linkTrailer','priceSingleSeat','priceDouble','active'];
    
}
