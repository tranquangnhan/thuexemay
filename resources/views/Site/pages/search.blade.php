@extends('Site.layout')

@section('main')
<div class="container bg-blue">
    <div class="search-header">
        <div class="search-landing-header-container">
            <div class="search-image-container">
                <img src="./tainguyen/asset/img/img-search/wall.jpg" alt="">
            </div>
            <div class="search-landing-image-text">
                <h1 class="search-landing-heading">TBE</h1>
                <p class="search-landing-heading-text">50,102+ người đã sử dụng dịch vụ của bên TBE</p>
            </div>
        </div>
        <form action="" class="search-results-details">
            <div class="search-input-container">
                <i class="fa-solid fa-magnifying-glass"></i>
                <input type="text" class="search-input" placeholder="Tìm kiếm xe">
            </div>
        </form>
        <section id="search-suggest-button">
            
            <?php
                $danhMuc= array('all','Honda','Piaggio','Suzuki','Sym','Yamaha');
            ?>
             @foreach ($danhMuc as $index =>$item)
             @if ($index == 0)
                <button type="button" class="search-suggest-button--btn active" data-search="{{$item}}">{{$item}}</button>
             @else
                <button type="button" class="search-suggest-button--btn" data-search="{{$item}}">{{$item}}</button>
             @endif
            
            @endforeach
           
        </section>
    </div>
    <div class="search-container">
        <div class="search-container-data">
            <div class="grid wide">
                <!-- Xe -->
                <div class="box-item">
                    <!-- Honda -->
                    @foreach ($data as $item)
                        <div class="item-moto" data-item="{{ $item->danhmuc}}" data-price="">
                            <div class="item__img">
                                <img src="{{ asset($URL_IMG. json_decode($item->img)[0]) }}" alt="">
                            </div>
                            <div class="item__title">
                               {{$item->tenxe}}
                            </div>
                            <div class="item__price">
                                {{$item->dongia}}
                            </div>
                            <div class="item__action">
                                <button  onclick="thueXe({{$item->id}})">Thuê Ngay</button>
                                <button class="open__more open__monkey open__{{ $item->danhmuc}}">Xem thông tin</button>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="item-moto" data-item="honda" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Honda/Monkey-Yellow.png" alt="">
                        </div>
                        <div class="item__title">
                            Monkey Yellow
                        </div>
                        <div class="item__price">
                            210.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__monkey">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="honda" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Honda/PCX_125-150_Thumb.png" alt="">
                        </div>
                        <div class="item__title">
                            PCX 125-150
                        </div>
                        <div class="item__price">
                            160.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__pcx">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="honda" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Honda/MSX125cc.png" alt="">
                        </div>
                        <div class="item__title">
                            MSX 125CC
                        </div>
                        <div class="item__price">
                            250.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__msx">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="honda" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Honda/20211025-Wave-Alpha-110-chi-tiet-xe-ban-gioi-han-do-den.png" alt="">
                        </div>
                        <div class="item__title">
                            Wave Alpha 110
                        </div>
                        <div class="item__price">
                            100.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__wave">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="piaggio" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Piaggio/Zip+Grey+Matt+01.png" alt="">
                        </div>
                        <div class="item__title">
                            Zip Grey Matt 01
                        </div>
                        <div class="item__price">
                            300.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__zipmatt">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="piaggio" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Piaggio/w_Capture+One+Session3841.png" alt="">
                        </div>
                        <div class="item__title">
                            Capture One Session
                        </div>
                        <div class="item__price">
                            290.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__capture">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="piaggio" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Piaggio/w-Capture-One-Catalog41039-copy.png" alt="">
                        </div>
                        <div class="item__title">
                            Capture One Catalog
                        </div>
                        <div class="item__price">
                            210.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__catalog">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="piaggio" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Piaggio/LibertyS_Green+Bosco+(2).png" alt="">
                        </div>
                        <div class="item__title">
                            LibertyS Green Bosco
                        </div>
                        <div class="item__price">
                            350.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__bosco">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="suzuki" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Suzuki/GSX150 - BANDIT.png" alt="">
                        </div>
                        <div class="item__title">
                            GSX150
                        </div>
                        <div class="item__price">
                            360.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__gsx">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="suzuki" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Suzuki/gixxer-sf-250-xanh.png" alt="">
                        </div>
                        <div class="item__title">
                            Gixxer Sf 250
                        </div>
                        <div class="item__price">
                            499.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__gixxer">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="suzuki" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Suzuki/gd110hu-2022-thumbnail.png" alt="">
                        </div>
                        <div class="item__title">
                            GD110HU 2022
                        </div>
                        <div class="item__price">
                            380.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__gd">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="suzuki" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Suzuki/xanh-den.png" alt="">
                        </div>
                        <div class="item__title">
                            Satria F150 Fl 2021
                        </div>
                        <div class="item__price">
                            340.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__satria">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="sym" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Sym/angel 110r.png" style="height:169px; margin-top:-12px;" alt="">
                        </div>
                        <div class="item__title">
                            Angel 110R 
                        </div>
                        <div class="item__price">
                            149.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__angel">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="sym" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Sym/PASSING 50 CC.png" alt="">
                        </div>
                        <div class="item__title">
                            PASSING 50 CC
                        </div>
                        <div class="item__price">
                            399.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__passing">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="sym" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Sym/Maxsym TL500.png" alt="">
                        </div>
                        <div class="item__title">
                            Maxsym TL500
                        </div>
                        <div class="item__price">
                            599.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__maxsym">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="sym" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Sym/husky-125.png" style="width: 90%; height: 173px; margin-top: -14px;" alt="">
                        </div>
                        <div class="item__title">
                            Husky 125
                        </div>
                        <div class="item__price">
                            499.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__husky">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="yamaha" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Yamaha/2017_FZ-07_ABS_l-650x400.png" style="height: 149px;" alt="">
                        </div>
                        <div class="item__title" style="margin-top: 39px;">
                            FZ 07 ABS 
                        </div>
                        <div class="item__price">
                            399.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__fz">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="yamaha" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Yamaha/Exciter-155-RC-STD-Mat-Red-001.png" alt="">
                        </div>
                        <div class="item__title">
                            Exciter 155 RC
                        </div>
                        <div class="item__price">
                            360.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__ex">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="yamaha" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Yamaha/R3 2020.png" alt="">
                        </div>
                        <div class="item__title">
                            R3 2020
                        </div>
                        <div class="item__price">
                            399.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__r3">Xem thông tin</button>
                        </div>
                    </div>
                    <div class="item-moto" data-item="yamaha" data-price="">
                        <div class="item__img">
                            <img src="./tainguyen/asset/img/img-search/Yamaha/gia-xe-yamaha-r15-ti-ef4c.png" alt="">
                        </div>
                        <div class="item__title">R15 Ti Ef4c
                        </div>
                        <div class="item__price">
                            599.000₫
                        </div>
                        <div class="item__action">
                            <button class="open__modal">Thuê Ngay</button>
                            <button class="open__more open__r15">Xem thông tin</button>
                        </div>
                    </div> --}}
                </div>

                <!-- Chi tiết xe -->

                @foreach ($data as $item)

                
                <div class="modal__more hide modal__mokey modal__{{ $item->danhmuc}}">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name"> {{$item->tenxe}}</h1>
                            <h4 class="more__price"> {{$item->dongia}}</h4>
                            <img src="{{ asset($URL_IMG. json_decode($item->img)[0]) }}" alt="">
                        </div>
                        <div class="modal__more--content">
                            {!!$item->mota!!}
                        </div>
                    </div>
                </div>
            @endforeach
            
                {{-- <div class="modal__more hide modal__mokey modal__pcx">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">PCX 125-150</h1>
                            <h4 class="more__price">160.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Honda/PCX_125-150_Thumb.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__pcx"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Độ cao yên</h3>
                                    <p class="more__item--sub-para">764mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">130kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Bạc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">PGM-FI, Xăng, 4 kỳ, 1 xy lanh, làm mát bằng dung dịch</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">PCX 125: 8,99 kW/8.500 vòng/phút <br>PCX 150: 10,8 kW/8.500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích nhớt máy</h3>
                                    <p class="more__item--sub-para">0,9 lít khi rã máy / 0,8 lít khi thay nhớt</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para">8 lít</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__msx">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">MSX 125CC</h1>
                            <h4 class="more__price">250.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Honda/MSX125cc.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__msx"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Độ cao yên</h3>
                                    <p class="more__item--sub-para">765mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">104kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Cam</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">PGM - FI, 4 kỳ, 125 cc, côn 4 số, làm mát bằng không khí</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">9,25 mã lực /7.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô-men cực đại</h3>
                                    <p class="more__item--sub-para">10,6 Nm tại 5.500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para">5,7 lít</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__wave">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Wave Alpha 110</h1>
                            <h4 class="more__price">100.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Honda/20211025-Wave-Alpha-110-chi-tiet-xe-ban-gioi-han-do-den.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__wave"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Độ cao yên</h3>
                                    <p class="more__item--sub-para">766mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">98kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Đỏ</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Xăng, 4 kỳ, xy-lanh, làm mát bằng không khí</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">5,1 kW/ 8.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô-men cực đại</h3>
                                    <p class="more__item--sub-para">7,0 N.m/ 5.500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para">3,6 lít</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__zipmatt">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Zip Grey Matt 01</h1>
                            <h4 class="more__price">300.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Piaggio/Zip+Grey+Matt+01.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__zipmatt"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Tiêu thụ nhiên liệu</h3>
                                    <p class="more__item--sub-para">2.47 I/100km</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">100kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xám</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Piaggio Hi-PER4 bốn thì, xy lanh đơn</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">4.2 kW ở 6,750 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô-men cực đại</h3>
                                    <p class="more__item--sub-para">6.5 Nm ở 5,550 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para">7,3 lít</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__capture">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Capture One Session</h1>
                            <h4 class="more__price">290.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Piaggio/w_Capture+One+Session3841.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__capture"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Tiêu thụ nhiên liệu</h3>
                                    <p class="more__item--sub-para">2.58 I/100km</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">98kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Trắng</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">i-get, xi lanh đơn 4 kì</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">2.4 kW ở 7,500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">49.9 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 6 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__catalog">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Capture One Catalog</h1>
                            <h4 class="more__price">210.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Piaggio/w-Capture-One-Catalog41039-copy.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__catalog"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Tiêu thụ nhiên liệu</h3>
                                    <p class="more__item--sub-para">2.74 I/100km</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">102kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Trắng</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">i-get, xi lanh đơn 4 kì, 3 van</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">7.6 kW ở 7,500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">124.5 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 6 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__bosco">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">LibertyS Green Bosco</h1>
                            <h4 class="more__price">350.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Piaggio/LibertyS_Green+Bosco+(2).png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__bosco"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Tiêu thụ nhiên liệu</h3>
                                    <p class="more__item--sub-para">2.74 I/100km</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">120kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Động cơ iGet, Xi lanh đơn, 4 kì, 3 van</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">7.6 kW ở 7,600 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">124,5 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 6 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__gsx">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">GSX150</h1>
                            <h4 class="more__price">360.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Suzuki/GSX150 - BANDIT.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__gsx"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Hệ thống van</h3>
                                    <p class="more__item--sub-para">DOHC 4 - van</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">118kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Đỏ</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4-thì, làm mát bằng dung dich</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">14,1 kW/ 10,500 vòng / phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích xy-lanh</h3>
                                    <p class="more__item--sub-para">147,3 cm3</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 11 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__gixxer">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Gixxer Sf 250</h1>
                            <h4 class="more__price">499.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Suzuki/gixxer-sf-250-xanh.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__gixxer"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Tiêu hao nhiên liệu</h3>
                                    <p class="more__item--sub-para">38.5 km/1 lít</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">161kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh Biển</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4-thì, làm mát bằng dung dich</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">26,5 mã lực tại 9.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">249 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 12 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__gd">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">GD110HU 2022</h1>
                            <h4 class="more__price">380.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Suzuki/gd110hu-2022-thumbnail.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__gd"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">750 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">108 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xám Đen</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4-thì, làm mát bằng dung dich</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">26,5 mã lực tại 9.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">249 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 8 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__satria">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Satria F150 Fl 2021</h1>
                            <h4 class="more__price">340.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Suzuki/xanh-den.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__satria"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">764 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">110 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh Đen</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Động cơ DOHC,4 thì, 4 vales, fi</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">26,5 mã lực tại 9.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">147.3 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 8 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__angel">
                    <div class="modal__more--moto">
                        <div class="modal__more--title" style="height: 61vh;">
                            <h1 class="more__name">Angel 110R</h1>
                            <h4 class="more__price">149.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Sym/angel 110r.png" style="height: 71%; object-fit: cover;" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__angel"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">750 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">103 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Đỏ Đen</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">5.3kw/7.500rpm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">110 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 3.4 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__passing">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">PASSING 50 CC</h1>
                            <h4 class="more__price">399.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Sym/PASSING 50 CC.png"  alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__passing"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">735 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">85 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Ghi</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">Xăng, 4 kỳ, 1 xi-lanh, làm mát bằng không khí</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">5.3kw/7.500rpm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">50 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích bình xăng</h3>
                                    <p class="more__item--sub-para"> 4.2 lít </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__maxsym">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Maxsym TL500</h1>
                            <h4 class="more__price">599.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Sym/Maxsym TL500.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__maxsym"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">795 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">223 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh Xám</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">2 xy-lanh, 8 van, làm mát bằng dung dịch</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">40 mã lực tại 6.750 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">465 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para"> 2,5 Nn tại vòng quay 6.250 vòng/phút </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__husky">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Husky 125</h1>
                            <h4 class="more__price">499.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Sym/husky-125.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__husky"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">775 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">118 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Đen</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4 thì, 1 xi-lanh, làm mát bằng không khí</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">12,5ps / 9.500 vòng/ phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">124 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para"> 9Nm/7000 vòng/ phút </p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__fz">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">FZ 07 ABS</h1>
                            <h4 class="more__price">399.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Yamaha/2017_FZ-07_ABS_l-650x400.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__fz"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">775 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">128 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">2 xy lanh, 689 cc, DOHC, 4 kỳ, 4 van/xy lanh</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">74,8 mã lực tại 9.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">689 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para"> 68 Nm@6.500 rpm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__ex">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">Exciter 155 RC</h1>
                            <h4 class="more__price">360.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Yamaha/Exciter-155-RC-STD-Mat-Red-001.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__ex"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">795 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">119 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Đỏ</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4 thì, 4 van, SOHC, làm mát bằng dung dịch</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">17.7 mã lực / 9,500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">155 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para">14.4 N・m (1.5 kgf・m) / 8,000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__r3">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">R3 2020</h1>
                            <h4 class="more__price">399.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Yamaha/R3 2020.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__r3"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">780 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">169 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">8 van, SOHC, Xăng, 2 xy-lanh, 4 kỳ</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">30,9kW tại 10.750rpm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">321 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para">29,6Nm tại 9000rpm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="modal__more hide modal__mokey modal__r15">
                    <div class="modal__more--moto">
                        <div class="modal__more--title">
                            <h1 class="more__name">R15 Ti Ef4c</h1>
                            <h4 class="more__price">599.000₫</h4>
                            <img src="./tainguyen/asset/img/img-search/Yamaha/gia-xe-yamaha-r15-ti-ef4c.png" alt="">
                        </div>
                        <div class="modal__more--content">
                            <ul class="more__list">
                                <h2>Thông số xe</h2>
                                <i class="fa-solid fa-xmark close__r15"></i>
                                <li class="more__item">
                                    <h3 class="more__item--para">Chiều cao yên xe</h3>
                                    <p class="more__item--sub-para">780 mm</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Khối lượng bản thân</h3>
                                    <p class="more__item--sub-para">136 kg</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Màu sắc</h3>
                                    <p class="more__item--sub-para">Xanh</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Động cơ</h3>
                                    <p class="more__item--sub-para">4 thì, làm mát bằng dung dịch, SOHC</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Công suất tối đa</h3>
                                    <p class="more__item--sub-para">14,2 kW (19,3 PS)/ 10.000 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Dung tích</h3>
                                    <p class="more__item--sub-para">155 cc</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Mô men xoắn</h3>
                                    <p class="more__item--sub-para">14,7 Nm (1,49 kgf.m)/ 8.500 vòng/phút</p>
                                </li>
                                <li class="more__item">
                                    <h3 class="more__item--para">Số chỗ ngồi</h3>
                                    <p class="more__item--sub-para">2</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div> --}}

                <!-- Thuê xe -->
                <div class="modal hide">
                    <form class="form__rent">
                        <h3 class="form__heading">Thông tin thuê xe
                        </h3>
                        <div class="form__close">
                            <i class="fa-solid fa-xmark"></i>
                        </div>
                        <div class="spacer"></div>
                        <div class="form__group">
                            <label for="fullname" class="form__label">Tên của bạn</label>
                            <input type="text" id="fullname" name="fullname" placeholder="VD: Phan Văn A" required class="form__control">
                            <span class="form__message"></span>
                        </div>
                        <div class="form__group">
                            <label for="phonenumber" class="form__label">Số điện thoại</label>
                            <input type="number" id="phonenumber" name="phonenumber" placeholder="VD:0123456789" required class="form__control">
                            <span class="form__message"></span>
                        </div>
                        <div class="form__group">
                            <label for="diadiem" class="form__label">Địa điểm nhận và trả</label>
                            <input type="text" id="diadiem" name="diadiem" placeholder="vd: Qui Nhơn" required class="form__control">
                            <span class="form__message"></span>
                        </div>
                        <div class="form__group">
                            <label for="ngaythue" class="form__label">Ngày Thuê</label>
                            <input type="date" id="ngaythue" name="ngaythue" placeholder="VD:0123456789" required class="form__control">
                            <span class="form__message"></span>
                        </div>
                        <div class="form__group">
                            <label for="ngaytra" class="form__label">Ngày Trả</label>
                            <input type="date" id="ngaytra" name="ngaytra" placeholder="VD:0123456789" required class="form__control">
                            <span class="form__message"></span>
                        </div>
                        <input type="hidden" name="csrf-token" content="{{ csrf_token() }}">
                        <button type="button" class="form__submit" onclick="submitFunction()">Thuê Xe</button>
                    </form>
                </div>
                <!-- Thông báo thành công -->
                <div class="modal__message">
                    <div class="modal__title">
                        <i class="fa-solid fa-circle-check"></i>
                        <div class="modal__content">
                            <h1>Thuê Xe Thành Công</h1>
                            <i>Chúng tôi sẽ lập tức liên lạc với bạn</i>
                        </div>
                    </div>
                    <i class="fa-solid fa-xmark success__close"></i>
                    <div class="progress"></div>
                </div>

                <div class="modal__error" id="modal__error">
                    <div class="modal__title" >
                        <i class="fa-solid fa-circle-check"></i>
                        <div class="modal__content">
                            <h1>Thuê Xe thất bại</h1>
                            <i>Vui lòng đăng nhập trước khi thuê xe</i>
                        </div>
                    </div>
                    <i class="fa-solid fa-xmark success__close"></i>
                    <div class="progress-2" id="progress-2"></div>
                </div>

                <h1 id="showtext"></h1>
            </div>
        </div>
    </div>
</div>

@endsection

