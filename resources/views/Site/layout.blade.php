<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TBE - Dịch Vụ Cho Thuê Xe Máy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/main.css">
    <link rel="stylesheet" href="./asset/css/grid.css">
    <link rel="stylesheet" href="./asset/font/fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('tainguyen/asset/css') }}/main.css">
    <link rel="stylesheet" href="{{ asset('tainguyen/asset/css') }}/grid.css">
    <link rel="stylesheet" href="{{ asset('tainguyen/asset/css') }}/search.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body>
    <!-- Phần Đầu -->
    <div class="header" >
        <div class="nav" id="nav">
            <div class="grid wide">
                <div class="header__top">
                    <div class="header__top-left">
                        <div class="header__top-left--logo">
                            <a href="/" class="header__logo">
                                <img src="./tainguyen/asset/img/logo/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="header__top-right">
                        <ul class="header__top-right--list">
                            <li class="header__top-right--item"><a href="/" class="header__top-right--item list-tour">TRANG CHỦ </a></li>
                            <li class="header__top-right--item">BẢNG GIÁ</li>
                            <li class="header__top-right--item list-policy">CHÍNH SÁCH
                                <i class="fa-solid fa-angle-down"></i>
                                <ul class="subnav-policy">
                                    <li class="item-policy">CHÍNH SÁCH THUÊ XE MÁY</li>
                                    <li class="item-policy">CHÍNH SÁCH KHÁCH HÀNG THÂN THIẾT</li>
                                </ul>
                            </li>
                            <li class="header__top-right--item">GIỚI THIỆU</li>
                            <li class="header__top-right--item">LIÊN HỆ</li>
                            <a href="/search" class="header__top-right--item list-tour">DANH MỤC XE 
                            </a>
                            <?php 
                            if(Auth::check()){
                                echo '<li class="header__top-right--item list-policy">
                                         '.Auth::user()->email.'
                                         <i class="fa-solid fa-angle-down"></i>
                                         <ul class="subnav-policy">
                                            <li class="item-policy"><a href="/dang-xuat" class="header__top-right--item list-tour">Đăng Xuất</a></li>
                                        </ul>
                                    </li>';
                            }else{
                                echo '     <li class="header__top-right--item">
                                                <a href="/dang-ky" class="header__top-right--item list-tour">Đăng Ký  </a>
                                            </li>
                                            <li class="header__top-right--item">
                                                
                                            <a href="/dang-nhap" class="header__top-right--item list-tour">Đăng Nhập </a></li>';
                            }
                            
                            ?>
                       
                        </ul>
                    </div>
                </div>
            </div>
        </div>
       
    </div>


    <main class="">
        @yield('main')
    </main>

 <!-- End -->
 <div class="footer">
        <div class="grid wide">
            <div class="footer-container">
                <div class="row">
                    <div class="col l-3">
                        <div class="widget">
                            <p class="widget-title">
                                Liên hệ					</p>
                            <div class="widget-content">
                                <p>TBE là dịch vụ cho thuê xe máy tự lái chuyên nghiệp tại Việt Nam.</p>
                                <p><i class="fa-solid fa-phone"></i>Tổng đài (24/24H): <a href="/">0397 135 609</a></p>
                                <p><i class="fa-solid fa-envelope"></i><a href="/">phanvanhieu2001.yt@gmail.com</a></p>
                                <p><i class="fa-solid fa-clock"></i>Thứ Hai - Chủ Nhật: 8:00 - 21:00</p>
                                <ul class="social-link">
                                    <li>
                                        <a href="https://www.facebook.com/hieu.phanvan.11111111111111111">
                                            <i class="fa-brands fa-facebook-square facebook"></i>
                                        </a>
                                    </li>
                                    <li><i class="fa-brands fa-instagram instagram"></i></li>
                                    <li><i class="fa-brands fa-linkedin-in linkedin"></i></li>
                                    <li><i class="fa-brands fa-twitter twitter"></i></li>
                                    <li><i class="fa-brands fa-pinterest pinterest"></i></li>
                                    <li><i class="fa-brands fa-youtube youtube"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col l-4"><div class="widget">
                        <p class="widget-title">
                            Về TBE					</p>
                        <div class="widget-content">
                            <p>TBE là dịch vụ cho thuê xe máy tự lái chuyên nghiệp tại Việt Nam.</p>
                            <p> Chính sách & Thủ tục thuê xe</p>
                            <p>Chính sách bảo mật thông tin cá nhân</p>
                            <p>FAQs</p>
                            <p> Liên hệ, hợp tác</p>
                            <p class="widget-text">
                                
								Chủ đề nội dung website						
                            </p>
                            <p>
                                <a href="/">Thuê xe máy</a>
                                |
                                <a href="/">Homestay</a>
                                |
                                <a href="/">Resort nghỉ dưỡng</a>
                                |
                                <a href="/">Phượt</a>
                                |
                                <a href="/">Du lịch</a>
                            </p>
                        </div>
                    </div></div>
                    <div class="col l-5">
                        <div class="widget">
                            <p class="widget-title">
                                Địa Điểm				</p>
                            <div class="widget-content">
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Ngũ Hành Sơn</a>
                                </p>
                                <p>149 Chương Dương</p>
                                <p>219 Lê Văn Hiến</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Sơn Trà</a>
                                </p>
                                <p>173 Võ Nguyên Giáp</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Liên Chiểu</a>
                                </p>
                                <p>19 Ngô Văn Sở</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Cẩm Lệ</a>
                                </p>
                                </p>
                                <p>149 Chương Dương</p>
                                <p>219 Lê Văn Hiến</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Sơn Trà</a>
                                </p>
                                <p>173 Võ Nguyên Giáp</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Liên Chiểu</a>
                                </p>
                                <p>19 Ngô Văn Sở</p>
                                <p class="widget-text">
                                    <a href="/">Thuê Xe Máy Cẩm Lệ</a>
                                </p>
                                <p>26 Đô Đốc Bảo</p>
                                <p class="link">
                                    <a href="/">
                                        <img src="./tainguyen/asset/img/img-link/20150827110756-dathongbao-min.png" style="width: 150px; height: 57px;" alt="">
                                    </a>
                                    <a href="/"><img src="./tainguyen/asset/img/img-link/dmca_protected_sml_120n.png" style="width: 121px; height: 24px;"alt=""></a>
                                    <a href="/"><img src="./tainguyen/asset/img/img-link/88x31.png" alt=""></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="copyright-text">
                <p>
                    © 2022 - Bản quyền thuộc về TEAM5_QLDA
                </p>
            </div>
        </div>
    </div>
    <!-- Liên Hệ -->
    <div class="zalo-chat">
        <img src="./asset/img/img-contact/zalo-icon.png" alt="">
    </div>
    <div class="mess-chat">
        <img src="./asset/img/img-contact/icon-messenger.png" alt="">
    </div>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="./tainguyen/app.js"></script>
    <script src="./tainguyen/search.js"></script>
</body>
</html>