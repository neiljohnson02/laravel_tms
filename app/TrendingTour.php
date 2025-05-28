<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingTour extends Model
{
    use HasFactory;

     protected $fillable = [
        'departure', 'tourtype', 'adult', 'infant', 'children', 'name', 'email', 'phone'
    ];
}
