<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';

    protected $fillable = [
    	'name',
    	'phone',
    	'gmail',
    	'date',
    	'country',
    	'option',
    	'adults',
    	'children'
    ];
}
