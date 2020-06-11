<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    //
    protected $table = "documents";
    public $timestamps = false;
    protected $fillable = [
        'doc_name',
    ];
    protected $hidden = [
         'remember_token',
    ];


    public function users(){
        return $this ->belongsTo('App\User');
    }
}
