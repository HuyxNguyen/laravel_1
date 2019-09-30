@extends('master')
@section('title')
    Sản phẩm {!! $sp['name_sp'] !!}
@endsection
@section('sp_noibat')
    <div class="card text-white">
        <img src="https://tanmydesign.com/uploaded/slideshow/b.%20%C3%A1o%20d%C3%A0i.png" class="card-img" alt="...">
        <div class="card-img-overlay card-overlay-set">
            <br>
        </div>
    </div>
    <br>
@endsection

@section('sp_1')
    <div class="container">
        <div class="row">
            {{--thong tin chinh--}}
            <div class="col-9">
                {{--slide + info--}}
                <h2>San pham moi</h2>
                <div class="row">
                    <div class="col-7">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"  >
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner" style="height: 350px" >
                                <div class="carousel-item active">
                                    <img class="" src="{{$url}}/img/anh1.png" alt="First slide">
                                </div>
                                @foreach($img as $img_sp)
                                    <div class="carousel-item">
                                        <img class="" src="{{$url}}/img/img_sp/{{$img_sp->url}}" alt="Second slide" >
                                    </div>
                                @endforeach
                                {{--<div class="carousel-item">--}}
                                    {{--<img class="" src="{{$url}}/img/anh2.png" alt="Second slide" >--}}
                                {{--</div>--}}
                                {{--<div class="carousel-item">--}}
                                    {{--<img class="" src="{{$url}}/img/anh3.png" alt="Third slide">--}}
                                {{--</div>--}}
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-5">
                        <br>
                        <h4 style="font-weight: bold">
                            San pham moi
                        </h4>
                        <div class="detail_product">
                            <div class="detail_item">
                                <div class="detail_name ">kich thuoc:</div>
                                <div>{!! $sp['kichthuoc_sp'] !!}</div>
                            </div>
                            <div class="detail_item">
                                <div class="detail_name ">loai san pham:</div>
                                <div>{!! $sp['loai_sp'] !!}</div>
                            </div>
                            <div class="detail_item">
                                <div class="detail_name"> mau sac: </div>
                                <div>{!! $sp['mausac_sp'] !!}</div>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                {{--anh + info chi tiet--}}
                <div class="detail_title">
                    chi tiet san pham
                </div>
                <div class="clear"></div>
                <div class="detail_info">
                    <p>san pham dep</p>
                    <img src="https://tanmydesign.com/uploaded/san-pham/Chan%20ga%20goi/Anh%20ga%20goi%20HOANG-6.jpg" alt="anh1">
                    <img src="https://tanmydesign.com/uploaded/san-pham/hdsd%20chuan-01.jpg" alt="anh2">
                </div>
                <br>
                {{--san pham khac--}}
                <div class="detail_title">
                    san pham khac
                </div>
                <div class="clear"></div>
                <br>
                <div class="row">
                    @foreach($sp_tuongtu as $sptt)
                        <div class="col-4 ">
                            <a href="" class="more_product">
                                <img src="{{$url}}/img/img_sp/{{$sptt->img_sp}}" alt="anh san pham" style="width: 250px;height: 200px">
                                <h5>Bộ khăn ăn(6chiếc)40x40 thêu hoa đào</h5>
                            </a>
                        </div>
                    @endforeach
                    {{$sp_tuongtu->links()}}
                </div>
            </div>

            {{--mini bar--}}
            <div class="col-3" >
                <div class="mini_bar">
                    <h4>Theu tinh hoa</h4>
                    <div class="detail_item">
                        <div class="detail_name "><a href="">theu tay thoi trang</a></div>
                    </div>
                    <div class="detail_item">
                        <div class="detail_name "><a href="">theu may vi tinh</a></div>
                    </div>
                    <div class="detail_item">
                        <div class="detail_name"><a href="">tranh theu vi tinh</a></div>
                    </div>
                    <div class="detail_item">
                        <div class="detail_name"><a href="">san pham dinh da</a></div>
                    </div>
                    <div class="detail_item">
                        <div class="detail_name"><a href="">san pham thu cong my nghe</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection
