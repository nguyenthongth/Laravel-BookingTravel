<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramTour extends Model
{
    protected $table = 'program';
    protected $fillable = [
        'name','content','nr_day','tour_id'
    ];
}
