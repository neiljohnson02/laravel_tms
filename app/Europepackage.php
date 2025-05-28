<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Europepackage extends Model
{
    use HasFactory;

    protected $fillable = [
        'departure',
        'email',
        'adult',
        'children',
        'infant',
        'package',
        'addons',
        'requests',
    ];

    protected $casts = [
        'addons' => 'array',
        'departure' => 'date',
    ];

    
}
