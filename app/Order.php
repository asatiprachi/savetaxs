<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    public $timestamps = false;
    protected $fillable = [
        'email', 'phonenumber','city','state','language',
    ];

  
}
