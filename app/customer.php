<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = "customer";
    public function bill(){
        return $this->hasMany('App\bill','id_kh','id_kh');
    }
}
