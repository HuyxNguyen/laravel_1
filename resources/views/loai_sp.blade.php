@extends('master')

@section('title')
    Sản phẩm {!! $ten_loai !!}
@endsection
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
        <h5 class="font-weight-bold">Sản Phẩm {!! $ten_loai !!} </h5>
        <p>Tổng hợp những mẫu {!! $ten_loai !!} chất lượng đến từ Thêu Tinh Hoa</p>
        <div class="row">
            @foreach( $sp as $product)
                <div class="col-3 chi_tiet_sp">
                    <a href="/Laravel_test/test/public/loai_sp/{!! $product->loai_sp !!}/{!! $product->id_sp !!}">
                        <img src="/Laravel_test/test/public/img/img_sp/{{$product->img_sp}}" alt="" style="width: 250px;height: 200px">
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
