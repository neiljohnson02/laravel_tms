<?php

namespace App;
use App\Mail\grpMail;
use App\Http\Controllers\NavbarController;
use Illuminate\Database\Eloquent\Model;

class grpemail extends Model
{
    protected $fillable=[
        'name','cityofresitense','email','phonenumber','whatsapp','traveldestination','dateoftravel','numberoftravelers','vocationtype'
    ];
}
