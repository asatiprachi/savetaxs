<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = "documents";
    public $timestamps = true;
    protected $fillable = [
        'myfile',
    ];
    protected $hidden = [
         'remember_token',
    ];


    public function users(){
        return $this ->belongsTo('App\User');
    }
}
