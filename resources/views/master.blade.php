<html>
<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Laravel_test/test/public/css/app.css" >{{--bootstrap--}}
    <link rel="stylesheet" href="/Laravel_test/test/public/css/master.css">
    <link rel="stylesheet" href="/Laravel_test/test/public/css/tab.css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <script src="{{$url}}/js/app.js"></script>
</head>
<body>
    <br>
    <div class="header container">
        <img src="https://tanmydesign.com/uploaded/logo/logo.png" alt="">
    </div>
    <br>
    {{--task bar--}}
    <div style="border-bottom: #1d68a7 2px solid">
        <div class="container " >
            <div class="row text-center menu-first">
                <div class="col-2">
                    <a href="/Laravel_test/test/public/index" class="nav-link">trang chủ</a>
                </div>
                <div class="col-2">
                    <a href="/Laravel_test/test/public/gioi_thieu" class="nav-link">giới thiệu</a>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            thêu tay thời trang
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="/Laravel_test/test/public/loai_sp/theutay">Sản phẩm thêu tay</a>
                            <a class="dropdown-item" href="/Laravel_test/test/public/loai_sp/dinhda">Sản phẩm đính đá</a>
                            <a class="dropdown-item" href="#">Sản phẩm thủ công mỹ nghệ</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            thêu máy vi tính
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="#">Thêu quần áo thời trang</a>
                            <a class="dropdown-item" href="#">Thêu logo </a>
                            <a class="dropdown-item" href="#">Tranh thêu vi tính</a>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <a href="" class="nav-link">liên hệ</a>
                </div>
            </div>
        </div>
    </div>

    {{--slide--}}
    @yield('slide')

    {{--san pham noi bat--}}
    @yield('sp_noibat')

    {{--san pham 1--}}
    @yield('sp_1')

    {{--san pham 2--}}
    @yield('sp_2')

    {{--trang suc thiet ke--}}
    @yield('trang_suc')

    {{--noi that--}}
    @yield('thoi_trang')

    {{--info Home--}}
    @yield('info_home')


    <footer class="page-footer">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <h5 class="text-uppercase font-weight-bold text-light">
                        Xưởng thêu Tinh Hoa
                    </h5>
                    <div class="text-light text-footer">
                        <span>Địa chỉ : Thắng Lợi, Thường Tín, Hà Nội</span>
                        <span>Điện thoại : 0912 218 357 (Mr Hòa)</span>
                        <span>Email : theutinhhoa@gmail.com</span>
                    </div>
                </div>
                <div class="col-4">
                    <h5 class="text-uppercase font-weight-bold text-light">
                        Về Thêu Tinh Hoa
                    </h5>
                    <div class="text-light text-footer">
                        <a href="">Thêu tay thời trang</a>
                        <a href="">Thêu máy vi tính</a>
                        <a href="">Tranh thêu tay</a>
                        <a href="">Tranh thêu vi tính</a>
                        <a href="">Sản phẩm đính đá, cườm</a>
                    </div>
                </div>
                <div class="col-3">
                    <h5 class="text-uppercase font-weight-bold text-light">
                        Liên hệ và mua hàng
                    </h5>
                    <div class="text-light text-footer">
                        <a href="">
                            Liên hệ đặt hàng và hợp tác
                        </a>
                        <a href="">Phương thức thanh toán</a>
                        <a href="">Chính sách bảo mật</a>
                        <a href="">Chính sách đổi trả</a>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </footer>
</body>
</html>