<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    
    protected $fillable = [
        'email', 'phonenumber','city','state','language',
    ];

    protected $hidden = [
         'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
