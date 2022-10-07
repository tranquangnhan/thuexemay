@extends('Site.layout')

@section('main')
<section class="header-image">
    <div class="container">
        <div class="grid wide">
            <div class="row">
                <div class="col l-12">
                    <div class="title-slogan">
                        <h1>Dịch vụ thuê xe máy</h1>
                        <p>Chúng tôi hiểu cảm giác của người đi thuê xe máy phải bỏ ra một số tiền để có được một chiếc xe đủ tốt, không gặp rắc rối khi đi trên đường. Tuy nhiên thật khó để tìm được một đơn vị cung cấp dịch vụ cho thuê xe uy tín, chất lượng hiện nay. TBE - tiên phong trở thành đơn vị số 1 về cung cấp dịch vụ thuê xe máy tự lái tại Việt Nam.</p>
                    </div>
                </div>
                <div class="col l-5 center">
                    <a href="/search"><button class="submit-btn" type="button">Đặt xe ngay</button></a>
                    
                </div> 
            </div>
        </div>
    </div>
</section>
    <!-- Địa Điểm -->
    <div class="location__get">
        <h2 class="location__get--title">THUÊ XE MÁY TẠI</h2>
        <div class="grid wide">
            <div class="row">
                <div class="col l-3">
                    <div class="inner">
                        <img src="./tainguyen/asset/img/img-loca/nguhanhson.jpg" class="thumnal" alt="">
                        <span class="inner-text">Ngũ Hành <br>Sơn</span>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="inner">
                        <img src="./tainguyen/asset/img/img-loca/sontrajpg.jpg" class="thumnal" alt="">
                        <span class="inner-text">Sơn Trà</span>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="inner">
                        <img src="./tainguyen/asset/img/img-loca/lienchieu.jpg" class="thumnal" alt="">
                        <span class="inner-text">Liên Chiểu</span>
                    </div>
                </div>
                <div class="col l-3">
                    <div class="inner">
                        <img src="./tainguyen/asset/img/img-loca/camle.jpg" class="thumnal" alt="">
                        <span class="inner-text">Cẩm Lệ</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Danh Mục -->
    <div class="category__car">
        <div class="grid wide">
        <div class="category__car-text">
            <h2 class="category__car-title">DANH MỤC XE MÁY</h2>
            <span class="category__car-paragraph">Toàn bộ xe máy cho thuê của chúng tôi là xe được mua mới 100%, được đăng ký chính chủ. Ngoài ra, các xe sau khi kết thúc hợp đồng với khách sẽ được kiểm tra, bảo dưỡng, thay thế các bộ phận hỏng hóc và phải đạt chuẩn an toàn xe trước khi giao cho khách hàng mới.</span>
        </div>
            <div class="row">
                <div class="col l-4">
                    <div class="category__item">
                        <div class="category__item-header">
                            <h3 class="category__item-header--title">
                                <span>Xe Giá Rẻ</span>
                            </h3>
                            <p class="category__item-header--price">
                                <span>100</span>
                                .000₫ -
                                <span>200</span>
                                .000₫
                                / Ngày
                            </p>
                        </div>
                        <div class="category__item-info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 mũ bảo hiểm 1/2 đầu
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 áo mưa dùng một lần                                            
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Bảo hiểm + Đăng ký xe photo                                             
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Xe đi các tỉnh Đông Bắc, Tây Bắc sẽ thu thêm 30.000đ/ ngày                                            
                                </li>
                            </ul>
                        </div>
                        <div class="category__item-img">
                            <img src="./tainguyen/asset/img/img-search/Honda/20211025-Wave-Alpha-110-chi-tiet-xe-ban-gioi-han-do-den.png" alt="" class="category__item-img--img">
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="category__item">
                        <div class="category__item-header">
                            <h3 class="category__item-header--title">
                                <span>Xe Tầm Trung</span>
                            </h3>
                            <p class="category__item-header--price">
                                <span>200</span>
                                .000₫ -
                                <span>400</span>
                                .000₫
                                / Ngày
                            </p>
                        </div>
                        <div class="category__item-info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 mũ bảo hiểm 1/2 đầu
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 áo mưa dùng một lần                                            
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Bảo hiểm + Đăng ký xe photo                                             
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Dịch vụ cứu hộ                                            
                                </li>
                            </ul>
                        </div>
                        <div class="category__item-img">
                            <img src="./tainguyen/asset/img/img-search/Honda/MSX125cc.png" style="width: 92%; margin-top: 18px;" alt="">
                        </div>
                    </div>
                </div>
                <div class="col l-4">
                    <div class="category__item">
                        <div class="category__item-header">
                            <h3 class="category__item-header--title">
                                <span>Xe Cao Cấp</span>
                            </h3>
                            <p class="category__item-header--price">
                                <span>400</span>
                                .000₫ -
                                <span>600</span>
                                .000₫
                                / Ngày
                            </p>
                        </div>
                        <div class="category__item-info">
                            <ul>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 mũ bảo hiểm 1/2 đầu
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    02 áo mưa dùng một lần                                            
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Bảo hiểm + Đăng ký xe photo                                             
                                </li>
                                <li>
                                    <i class="fa-solid fa-circle-check"></i>
                                    Dịch vụ cứu hộ                                            
                                </li>
                            </ul>
                        </div>
                        <div class="category__item-img">
                            <img src="./tainguyen/asset/img/img-search/Yamaha/gia-xe-yamaha-r15-ti-ef4c.png" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="cta-bottom">
                <p> Để thuê xe máy dài ngày, vui lòng xem chi tiết bảng giá dưới đây!
                </p>
                <p class="line-bottom">
                    <a href="./search.html" class="btn-price">DANH MỤC CHO THUÊ XE</a>
                </p>
            </div>  
        </div>
    </div>
    <!-- Giới Thiệu -->
    <div class="introduce">
        <div class="grid wide">
            <div class="row">
                <div class="col l-6">
                    <div class="introduce-inner">
                        <span class="introduce-inner-icon">
                            <i class="fa-solid fa-thumbs-up"></i>
                        </span>
                        <h2 class="introduce-inner-heading">
                            Không tiền đặt cọc
                        </h2>
                        <div class="introduce-inner-text">
                            <p>
                                Khách hàng không phải đặt cọc bất cứ khoản tiền cho việc thuê xe máy nào nếu có đầy đủ
                                  các giấy tờ yêu cầu được quy định trong chính sách của cty. Chi tiết thủ tục giấy tờ vui
                                  lòng xem tại mục chính sách thuê xe của chúng tôi.                           </p>
                        </div>
                    </div>
                </div>
                <div class="col l-6">
                    <div class="introduce-inner">
                        <span class="introduce-inner-icon">
                            <i class="fa-solid fa-address-card"></i>
                        </span>
                        <h2 class="introduce-inner-heading">
                            1 NGÀY THUÊ = 24H
                        </h2>
                        <div class="introduce-inner-text">
                            <p>
                                Không giống như các đơn vị cho thuê xe khác, ngày thuê xe được tính từ sáng đến chiều, vậy với cùng khoảng thời gian thuê xe 24h bạn luôn phải trả nhiều tiền hơn so với việc thuê xe của MOTOGO. Cách tính 1 ngày thuê xe = 24h của chúng tôi cực kỳ có lợi cho người thuê xe.                           </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col l-6">
                    <div class="introduce-inner">
                        <span class="introduce-inner-icon">
                            <i class="fa-solid fa-motorcycle"></i>
                        </span>
                        <h2 class="introduce-inner-heading">
                            DỊCH VỤ GIAO, TRẢ XE TẬN NƠI
                        </h2>
                        <div class="introduce-inner-text">
                            <p>
                                Chúng tôi cung cấp dich vụ giao xe tận nơi cho bạn với một khoản phí phát sinh thấp. Chi phí giao xe sẽ được tính toán theo địa điểm giao nhận xe của khách và phí mỗi lần không vượt quá 40k.                           </p>
                        </div>
                    </div>
                </div>
                <div class="col l-6">
                    <div class="introduce-inner">
                        <span class="introduce-inner-icon">
                            <i class="fa-solid fa-gears"></i>
                        </span>
                        <h2 class="introduce-inner-heading">
                            ĐI BAO NHIÊU THANH TOÁN BẤY NHIÊU
                        </h2>
                        <div class="introduce-inner-text">
                            <p>
                                Từ ngày thuê xe thứ 2 trở đi cách tính giá thuê xe theo giờ sẽ được áp dụng, với mỗi giờ phát sinh của xe số chúng tôi sẽ thu thêm 10k, xe tay ga là 20k. Thuê xe quá 9 tiếng sẽ được tính tròn 1 ngày thuê xe. Trả xe sớm MOTOGO sẽ hoàn tiền thừa lại cho bạn.                           </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Thủ Tục -->
    <div class="procedure">
        <div class="grid wide">
            <div class="procedure-container">
                <h2 class="procedure-container-heading">
                    THỦ TỤC THUÊ XE        
                </h2>
                <div class="row">
                    <div class="col l-4">
                        <div class="procedure-inner">
                            <div class="procedure-inner-title">
                                KHÁCH DU LỊCH
                            </div>
                            <ul>
                                <li>1 trong 3 loại giấy tờ sau: Chứng minh thư, Hộ chiếu, Thẻ căn cước công dân.</li>
                                <li>Thông tin vé máy bay hoặc vé tàu chiều đến và rời Đà Nẵng. Thông tin vé có thể là cuống vé hoặc vé điện tử.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="procedure-inner">
                            <div class="procedure-inner-title">
                                KHÁCH SỐNG TẠI ĐÀ NẴNG
                            </div>
                            <ul>
                                <li>1 trong 3 loại giấy tờ sau: Chứng minh thư, Hộ chiếu, Thẻ căn cước công dân.</li>
                                <li>Sổ hộ khẩu gốc. Trường hợp không có sổ hộ khẩu gốc thì đặt cọc 3 triệu thay thế cho Sổ hộ khẩu.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col l-4">
                        <div class="procedure-inner">
                            <div class="procedure-inner-title">
                                NHÓM KHÁC
                            </div>
                            <ul>
                                <li>Với khách thuê xe không thuộc 2 nhóm trên, xin vui lòng gọi điện cho tổng đài hỗ, trợ số điện thoại 0338 023 344 để được hỗ trợ và giải đáp.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

