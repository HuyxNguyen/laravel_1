<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bill extends Model
{
    //
    protected $table = 'bill';

    public function customer(){
        return $this->belongsTo('App/customer','id_kh','id_kh');
    }
    public function product(){
        return  $this->belongsTo('App/product','id_sp','id_sp');
    }
}
