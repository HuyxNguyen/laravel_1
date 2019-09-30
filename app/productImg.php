<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class productImg extends Model
{
    //
    protected $table = 'img_product';
    public function product(){
        return $this->belongsTo("App\Product", "id_img","id_sp");
    }
    public function them_sp($id, $imageName){
        DB::table('img_product')->insert([
            'id_sp' => $id,
            'url' => $imageName
        ]);
    }
    public function get_img($id_sp){
        $img = DB::table('img_product')->where('id_sp',$id_sp)->get('url');
        return $img;
    }
}
