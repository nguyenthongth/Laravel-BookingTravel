<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TourDetail extends Model
{
    protected $table = 'detail_tour';

    protected $fillable = [
        'transfer_info',
        'hotel_info',
        'tour_guide_info',
        'generate_address',
        'generate_time',
        'note',
        'tour_id',
    ];
}
