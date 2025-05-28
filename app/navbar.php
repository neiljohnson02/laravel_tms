<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    protected $fillable = [
         'tourtype','tourname', 'prizedetails', 'day1', 'day2', 'day3', 'day4','image'
    ];

    
}

