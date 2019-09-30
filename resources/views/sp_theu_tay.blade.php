//ko con dung nua

@extends('master')

@section('title','Sản phẩm thêu tay truyền thống')
@section('sp_noibat')
    <div class="card text-white">
        <img src="https://tanmydesign.com/uploaded/slideshow/b.%20%C3%A1o%20d%C3%A0i.png" class="card-img" alt="...">
        <div class="card-img-overlay card-overlay-set">
            <br>
        </div>
    </div>
    <hr>
@endsection

@section('sp_1')

    <div class="container ds_sp">
        <h5 class="font-weight-bold">Sản Phẩm {!! $ten !!}</h5>
        <p>Tổng hợp những mẫu thêu tay chất lượng đến từ Thêu Tinh Hoa</p>
        <div class="row">
            @foreach( $sp as $product)
                <div class="col-3 chi_tiet_sp">
                    <a href="">
                        <img src="/img/{{$product->img_sp}}" alt="" style="max-width: 250px">
                        <h5 style="font-weight: bold">{{$product->name_sp}}</h5>
                    </a>
                    <p class="mo_ta">
                        {{$product->note_sp}}
                    </p>
                </div>
            @endforeach
        </div>
        {!! $sp->links() !!}

    </div>
@endsection
