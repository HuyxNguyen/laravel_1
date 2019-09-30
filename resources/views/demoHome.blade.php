@extends('master')

@section('title','THÊU TINH HOA')

@section('slide')
    <div id="carouselControls" class="carousel slide slide_set" data-ride="carousel">
        <div class="carousel-inner">
            {{--<div class="carousel-item active">
                <img src="{{ ('img/anh1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ 'img/anh2.png' }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ 'img/anh3.png' }}" class="d-block w-100" alt="...">
            </div>--}}
            <div class="carousel-item active">
                <img src="{{ ('img/anh1.png') }}" class="d-block w-100" alt="...">
            </div>
           @foreach($slide as $sl)
                <div class="carousel-item">
                    <img src="img/{{$sl->link}}" class="d-block w-100" alt="...">
                </div>
           @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <hr>
@endsection

@section('sp_noibat')
    <div class="card text-white">
        <img src="https://tanmydesign.com/uploaded/slideshow/b.%20%C3%A1o%20d%C3%A0i.png" class="card-img" alt="...">
        <div class="card-img-overlay card-overlay-set">
            <h2 class=" text-center" >SẢN PHẨM NỔI BẬT</h2>
            <br>
            <br>
            <h5 class="text-center detail_link"><a href="">CHI TIẾT</a></h5>
        </div>
    </div>
    <hr>
@endsection

@section('sp_1')
    <div class="container" >
        <div class="row">
            <div class="col-6 text-center sp_set">
                <h3 style="font-weight: bold; font-family: 'Times New Roman'">THÊU TAY TINH HOA</h3>
                <p>Các mẫu thêu tay được ưa chuộng tại xưởng thêu Tinh Hoa</p>
                <a href="">
                    <img src="{{ ('img/anh4.jpg') }}" class="d-block sp_set_img" alt="anhtheutay">
                </a>
                <br>
                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
            </div>
            <div class="col-6 text-center sp_set">
                <h3 style="font-weight: bold; font-family: 'Times New Roman'">THÊU MÁY</h3>
                <p>Các mẫu thêu máy phục vụ sản phẩm thời trang, may mặc</p>
                <a href=""><img src="{{ ('img/anh5.jpg') }}" class="d-block sp_set_img" alt="anhtheumay"></a>
                <br>
                <button class="btn btn-outline-primary btn-sm">Chi tiết</button>
            </div>
        </div>
    </div>
    <br>
@endsection

@section('sp_2')
    <div class="thoi-trang">
        <div class="content-text">
            <h3 class="text-center">SẢN PHẨM THỜI TRANG</h3>
            <p>Sản phẩm thời trang mang giá trị tri truyền thống với thiết kế tinh tế.
                sản phẩm thời trang mang giá trị tri truyền thống với thiết kế tinh tế, chất liệu tốt nhất được cắt may thủ công.
            </p>
        </div>
        <br>
        <div class="container">
            <div class="row sp_thoi_trang" >
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh3.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Trang phục</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh3.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Trang phục</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh3.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Trang phục</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh3.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Trang phục</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

@section('trang_suc')
    <section id="tabs" style="background-image: url('img/anh_trangsuc.png')">
        <div class="container">
            <h6 class="section-title h1">Thiết kế trang phục</h6>
            <div class="row text-center sp_thiet_ke">
                <div class="col-xs-12 ">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Mẫu áo</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Mẫu thêu logo</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Áo dài cách tân</a>
                            <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">Túi thêu</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            Áo đầm thêu tay là một trong những sản phẩm thời trang dành cho những quý cô,
                            quý bà yêu thích sự nhẹ nhàng nhưng không kém phần tinh tế. Với 100+ mẫu áo đa dạng, phong phú
                            chắc chắn sẽ làm hài lòng cả những người khó tính nhất
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            Thêu logo lên quần áo, phụ kiện hàng dệt may hiện nay rất phổ biến. Với mục đích trang trí hoặc xây dựng nhận diện thương hiệu.
                            So với in, thêu logo lên áo tạo nên ấn tượng ngay từ cái nhìn đầu tiên về sự nổi bật, sang trọng.
                            Kết hợp với chất lượng thêu làm tăng giá trị của sản phẩm.
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            Áo dài lụa thêu hay nhung voan thêu tay 2019 đang nổi lên như là một xu hướng thời trang
                            mới của phái nữ, không sặc sỡ như Gucci, không phá cách như Louis Vuitton
                            .Áo dài thêu tay chất liệu nhung hay lụa lại dịu dàng hơn,
                            đơn giản hơn nhưng lại khiến cho người phụ nữ trở nên cuốn hút đến kỳ lạ.
                        </div>
                        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                            Túi thêu thời là sản phẩm dành tôn lên vẻ nũ tính cho bạn gái .
                            Sản phẩm cao cấp bền đẹp và thời trang này chắc chắn sẽ khiến bạn mê mẩn ngay từ
                            lần gặp đầu tiên và muốn rinh về ngay lập tức.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
@endsection

@section('thoi_trang')
    <div class="thoi-trang">
        <div class="content-text">
            <h3 class="text-center">SẢN PHẨM NỘI THẤT</h3>
            <p>Sản phẩm nội thất mang giá trị tri truyền thống với thiết kế tinh tế.</p>
            <p>
                Chắc chắn sẽ giúp căn phòng nhà bạn nghệ thuật và sang trọng hơn rất nhiều
            </p>
        </div>
        <br>
        <div class="container">
            <div class="row sp_thoi_trang" >
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh7_s1.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Phòng ngủ</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh7_s1.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Phòng ngủ</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh7_s1.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Phòng ngủ</h4>
                    </a>
                </div>
                <div class="col-3 text-center chi_tiet_sp">
                    <a href="">
                        <img src="{{'img/anh7_s1.jpg'}}" alt="">
                        <h4 style="font-weight: bold">Phòng ngủ</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
@endsection

@section('info_home')
    <div class="info-home" style="" >
        <div class="content-text text-center">
            <h3>THÊU TINH HOA - 1999</h3>
            <p>
                Thêu Tinh Hoa là điểm đến nổi tiếng với những sản phẩm thời trang được thêu bằng tay tinh xảo,
                Điểm đặc biệt của các sản phẩm là hoàn toàn được thực hiện bằng tay
                của các thợ thủ công có kĩ thuật cao
                để đảm bảo chất lượng tốt nhất cho các sản phẩm thêu.
            </p>
        </div>
    </div>
@endsection