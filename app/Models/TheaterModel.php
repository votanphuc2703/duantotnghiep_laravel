<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TheaterModel extends Model
{
    use HasFactory;
    protected $table='theater';
    protected $fillable=['name','address','active'];
}
