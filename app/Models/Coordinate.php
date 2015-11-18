<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinate extends Model
{
    protected $table = 'coordinates';

    protected $fillable = ['latitude', 'longitude']

}