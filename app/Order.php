<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = "order";
    public $timestamps = true;
    protected $fillable = [
        'email', 'phonenumber','city','state','language',
    ];
    protected $hidden = [
         'remember_token',
    ];

    
    public function users(){
        return $this ->belongsTo('App\User');
    }
  
}
