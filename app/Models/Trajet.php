<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    protected $table = 'trajet';
    protected $fillable = [
        'startDateTime',
        'startPlace', 
        'destination',
        'longtitude',
        'latitude',
        'reservation_id'
    ];
}
