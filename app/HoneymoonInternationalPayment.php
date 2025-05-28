<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoneymoonInternationalPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_group', 'first_name', 'email', 'phone',
        'address_line1', 'address_line2', 'city', 'state', 'zip',
        'amount', 'description', 'card_first_name', 'card_last_name',
        'date', 'signature'
    ];


}
