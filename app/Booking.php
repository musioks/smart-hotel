<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
       protected $fillable = [
        'product_id','customer_id','checkin_date','checkout_date','no_people','status',
    ];
}
