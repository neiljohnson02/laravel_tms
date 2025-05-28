<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expensive extends Model
{
    use HasFactory;

    protected $fillable =[
         'table_name', 'profit', 'expenses'
    ];

}
