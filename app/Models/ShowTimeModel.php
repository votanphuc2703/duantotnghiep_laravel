<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShowTimeModel extends Model
{
    use HasFactory;
    protected $table='showtime';
    protected $fillable=['dateShow','startTime','idMovie','idRom'];
}
