<?php

namespace App\Http\Controllers;

use App\product;
use App\productImg;
use App\slide;
use Illuminate\Http\Request;

class page_controller extends Controller
{
    //
    public function Home(){
        $slide = slide::all();
        return view('demoHome', ['slide'=> $slide] );
    }
    public function loai_sp($type){
        $sp = new product();
        $sp = $sp->get_sp($type);
        $ten_loai;
        if ($type == 'theutay'){
            $ten_loai = 'Thêu tay';
        }else if ($type == 'dinhda'){
            $ten_loai = 'Đính đá';
        }else{
            $ten_loai = 'Thủ công';
        }
        return view('loai_sp',
            [
                'sp' => $sp,
                'ten_loai' => $ten_loai
            ]);
    }
    public function chitiet_sp($type,$id_sp){
        $sp = new product();
        $img_sp = new productImg();
        $product = $sp->get_chitietsp($id_sp);
        $img = $img_sp->get_img($id_sp);

        foreach ($product as $pr){
            $san_pham = [
                'name_sp' => $pr->name_sp,
                'loai_sp' => $pr->loai_sp,
                'note_sp' => $pr->note_sp,
                'id_sp' => $pr->id_sp,
                'img_sp' => $pr->img_sp
            ];
        }
        return view('chitiet_sp',
            [
                'sp' => $san_pham,
                'img' => $img
            ]);
    }
//    public function sp_theu_tay(){
////      not need to use
//        $sp = new product();
//        $sp = $sp->get_sptheutay();
//        $ten = 'Thêu tay';
//        return view('sp_theu_tay',
//            [
//                'sp' => $sp,
//                'ten' => $ten
//            ]);
//    }
    public function them_sp(Request $request){
        //ktra anh upload
        $this->validate($request, [
            'photos' => 'required',
            'photos.*' => 'image|mimes:jpeg,bmp,png'
        ]);
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,bmp,png',
        ]);
        //them vao product
        $product = $request->image;
        $imageDisplay = time().$product->getClientOriginalName();
        $product->move(public_path('img/img_sp'),$imageDisplay);

        $query1 = new product();
        $id = $query1->them_sp($request,$imageDisplay);


        //them vao product image
        $files = $request->photos;
        foreach ($files as $file){
            $imageName = time().$file->getClientOriginalName();
            $file->move(public_path('img/img_sp'), $imageName);
            $query2 = new productImg();
            $query2->them_sp($id,$imageName);
        }

        return back()
            ->with('success','You have successfully upload image.');
    }


}
