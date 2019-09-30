<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class product extends Model
{
    //
    protected $table = "product";
    public function bill(){
        return $this->hasOne("App/bill",'id_sp','id_sp');
    }
//    public function get_sptheutay(){
//        not need to use
//        $san_pham = product::where('loai_sp','theutay')->paginate(12);
//        return $san_pham;
//    }
    public function get_sp($type){
        $san_pham = product::where('loai_sp',$type)->paginate(12);
        return $san_pham;
    }
    public function get_chitietsp($id){
        $san_pham = DB::table('product')->where('id_sp','=',$id)->get();
        return $san_pham;
    }
    public function them_sp($products, $img_sp){
        DB::table('product')->insert([
            'name_sp' => $products->name_sp,
            'price_sp' => $products->price_sp,
            'amount_sp' => $products->amount_sp,
            'note_sp' => $products->note_sp,
            'loai_sp' => $products->loai_sp,
            'img_sp' => $img_sp
        ]);
        $id =  DB::table('product')->max('id_sp');
        return $id;
    }
}
