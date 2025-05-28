<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Welcome extends Model
{
    use HasFactory;

    protected $table = 'welcomes';

      protected $fillable = [
        'name',
        'cityofresitense',
        'email',
        'phonenumber',
        'tourtype',
        'whatsapp',
        'traveldestination',
        'dateoftravel',
        'numberoftravelers',
        'vocationtype',
    ];
}
