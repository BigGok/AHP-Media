<?php 
session_start();
include('includes/config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>AHP Agency</title>
    <link rel="icon" type="image/x-icon" href="/images/ahp icon.png">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=K2D&family=Lalezar&display=swap" rel="stylesheet"> 
    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <!--rubik font family -->
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Rubik:ital,wght@0,400;0,700;1,700&display=swap"
        rel="stylesheet">
    <!--custom css-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />

    <!--media css-->
    <link type="text/css" rel="stylesheet" href="css/media.css" />

    <!--jquery ui files-->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="scss/style.scss">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900">
</head>

<body>



    <div id="arrow">
        <i class="fa fa-arrow-up" aria-shidden="true"></i>
    </div>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="./"><img class="bfg" src="images/logo AHP Agency.png"
                                alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa-solid fa-sliders"></i></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">
                                        <div class="name">
                                            <span data-text="TRANG CHỦ"> TRANG CHỦ </span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="About-Us.html">
                                        <div class="name">
                                            <span data-text="VỀ CHÚNG TÔI">VỀ CHÚNG TÔI</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item n1">
                                    <a class="nav-link dropdown-toggle" href="Service.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="name"><span data-text="DỊCH VỤ">DỊCH VỤ</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <div class="dichvu dic1">
                                            <a class="food">Thiết kế thương hiệu</a>
                                            <a class="dropdown-item" href="#">Thiết kế Logo</a>
                                            <a class="dropdown-item" href="#">Thiết kế nhận diện thương hiệu</a>
                                            <a class="dropdown-item" href="#">Đặt tên thương hiệu</a>
                                            <a class="dropdown-item" href="#">Sáng tác slogan</a>
                                            <a class="dropdown-item" href="#">Đăng ký bản quyền Logo</a>
                                            <a class="dropdown-item" href="#">Nhận diện thương hiệu văn phòng</a>
                                            <a class="dropdown-item" href="#">Nhận diện thương hiệu tại điểm bán</a>
                                            <a class="dropdown-item" href="#">Nhận diện thương hiệu Sản Phẩm</a>

                                        </div>
                                        <div class="dichvu dic2">
                                            <a class="food">Thiết kế Marketing</a>
                                            <a class="dropdown-item" href="#">Name card</a>
                                            <a class="dropdown-item" href="#">Bao thư</a>
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Kẹp file,folder</a>
                                            <a class="dropdown-item" href="#">Catalogue</a>
                                            <a class="dropdown-item" href="#">Brochure,Tờ gấp</a>
                                            <a class="dropdown-item" href="#">Tờ rơi,Flyer</a>
                                            <a class="dropdown-item" href="#">Giấy tiêu đề,Letterhead</a>

                                        </div>
                                        <div class="dichvu dic2">
                                            <a class="food">Thiết kế quảng cáo</a>
                                            <a class="dropdown-item" href="#">Quảng cáo</a>
                                            <a class="dropdown-item" href="#">Backdrop,bảng hiệu</a>
                                            <a class="dropdown-item" href="#">Standee</a>
                                            <a class="dropdown-item" href="#">Poster</a>
                                            <a class="dropdown-item" href="#">Tranh Canvas</a>
                                            <a class="dropdown-item" href="#">Menu</a>
                                            <a class="dropdown-item" href="#">Bao lì xì</a>
                                            <a class="dropdown-item" href="#">Lịch tết</a>

                                        </div>
                                        <div class="dichvu dic2">
                                            <a class="food">Thiết kế bao bì sản phẩm</a>
                                            <a class="dropdown-item" href="#">Hộp sản phẩm</a>
                                            <a class="dropdown-item" href="#">Bao bì, hộp sản phẩm</a>
                                            <a class="dropdown-item" href="#">Decal,tem nhãn</a>
                                            <a class="dropdown-item" href="#">Túi giấy</a>

                                        </div>
                                    </div>


                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="News.html">
                                        <div class="name"><span data-text="TIN TỨC">TIN TỨC</span></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" id="search-icon">
                                        <div class="name name9"><i class="fa fa-search"></i></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <div id="search-box">
                                        <input type="text" placeholder="Tìm kiếm...">
                                        <button>Tìm kiếm</button>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a data-modal-target="#mod-modal" class="nav-link name1">
                                        <div class="name name2"><span data-text="LIÊN HỆ">LIÊN HỆ</span></div>
                                    </a>
                                    <div class="mod-modal" id="mod-modal">
                                        <div class="mod-header">
                                            <div class="mod-title">KẾT NỐI NGAY VỚI AHP AGENCY</div>
                                            <button data-close-button class="mod-close-button">&times;</button>
                                        </div>
                                        <!-- MOD-BODY -->
                                        <div class="mod-body">
                                            <div class="mod-items1">
                                                <p class="mod-p">Hãy để chúng tôi giúp bạn xây dựng chiến lược
                                                    marketing hiệu quả với thiết kế độc đáo thu hút khách hàng tiềm năng
                                                    của bạn.
                                                    Liên hệ ngay với chúng tôi để được tư vấn tận tình.
                                                </p>
                                                <img class="mod-img" src="images/homecontact-bg.jpg" alt="">
                                                <div class="contain-contact">
                                                    <div class="nav-contact">
                                                        <div class="contact-items">
                                                            <div class="contact-hov">
                                                                <span>Hotline</span>
                                                                <div class="contact-info">
                                                                    <p class="ph-contact">0968.868.227</p>
                                                                </div>
                                                            </div>
                                                            <div class="contact-hov">
                                                                <span> Email</span>
                                                                <div class="contact-info">
                                                                    <p class="tel-contact"><a style="color: #fff;"
                                                                            href=""> ahpmedia@ahpvn.com</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mod-items2">
                                                <div class="form-contact">
                                                    <p class="mod-p">Công ty Truyền Thông AHP MEDIA đã được thành lập
                                                        với
                                                        mục đích mang
                                                        đến những giải pháp truyền thông
                                                        tiên
                                                        tiến và chất lượng cao cho các doanh nghiệp và tổ chức.</p>
                                                    <form id="form" class="hero-form" action="email-script.php">
                                                        <input id="idcontname" name="contname" type="text"
                                                            placeholder="Họ Tên" class="cont-name" required />
                                                        <input id="idcontloc" name="contloc" type="location"
                                                            placeholder="Địa Chỉ" class="cont-loc" required />
                                                        <input id="idcontphone" name="contphone" type="phone"
                                                            placeholder="Số Điện Thoại" class="cont-phone"
                                                            pattern="[0-9]{10}" required />
                                                        <input id="idcontemail" name="contemail" type="email"
                                                            placeholder="Email" class="cont-email" required />
                                                        <textarea class="cont-contect" cols="80" rows="6"
                                                            placeholder="Nội dung" required></textarea>
                                                        <input type="submit" value="Gửi yêu cầu" class="submit-btn" />
                                                    </form>
                                                    <div class="contact-items">
                                                        <div class="contact-hov">
                                                            <span>Hotline</span>
                                                            <div class="contact-info">
                                                                <p class="ph-contact">0968.868.227</p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-hov">
                                                            <span>Email</span>
                                                            <div class="contact-info">
                                                                <p class="tel-contact"><a style="color: #fff;" href="">
                                                                        ahpmedia@ahpvn.com</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="overlay"></div>
                                </li>
                                <li class="nav-items">
                                    <div id='google_translate_element' class="gg-translate"></div>
                                    <div class="translate-part">
                                    <label class="switch" onclick="translateToEnglish()">
                                        <input type="checkbox" id="lang-toggle">
                                        <span class="slider round"><span>
                                    </label>
                                        
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <div class="mailbox-phone">
        <a class=" blinking-phone" href="tel:0968868227"> <i class="fa fa-phone"> </i></a>

        <a id="open-modal" class=" blinking-email"> <i class="fa-solid fa-envelope" aria-hidden="true"></i></a>
        <a class="blinking-messenger" href="https://m.me/ahp.agency" target="_blank"><i
                class="fab fa-facebook-messenger"></i></a>
    </div>

    <!-- MAIL-BOX -->
    <div id="modal" class="modal">
        <div class="modal-content1">
            <div class="mod-header">
                <div class="mod-title">KẾT NỐI NGAY VỚI AHP AGENCY</div>
                <button class="close">&times;</button>
            </div>
            <div class="mod-body">
                <div class="mod-items1">
                    <p class="mod-p">Hãy để chúng tôi giúp bạn xây dựng chiến lược
                        marketing hiệu quả với thiết kế độc đáo thu hút khách hàng tiềm năng
                        của bạn.
                        Liên hệ ngay với chúng tôi để được tư vấn tận tình.
                    </p>
                    <img class="mod-img" src="images/homecontact-bg.jpg" alt="">
                    <div class="contain-contact">
                        <div class="nav-contact">
                            <div class="contact-items">
                                <div class="contact-hov">
                                    <span>Hotline</span>
                                    <div class="contact-info">
                                        <p class="ph-contact">0968.868.227</p>
                                    </div>
                                </div>
                                <div class="contact-hov">
                                    <span>Email</span>
                                    <div class="contact-info">
                                        <p class="tel-contact"><a style="color: #fff;" href=""> ahpmedia@ahpvn.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mod-items2">
                    <div class="form-contact">
                        <p class="mod-p">Công ty Truyền Thông AHP MEDIA đã được thành lập
                            với
                            mục đích mang
                            đến những giải pháp truyền thông
                            tiên
                            tiến và chất lượng cao cho các doanh nghiệp và tổ chức.</p>
                        <form id="form" class="hero-form" action="email-script.php">
                            <input id="idcontname" name="contname" type="text" placeholder="Họ Tên" class="cont-name"
                                required />
                            <input id="idcontloc" name="contloc" type="location" placeholder="Địa Chỉ" class="cont-loc"
                                required />
                            <input id="idcontphone" name="contphone" type="phone" placeholder="Số Điện Thoại"
                                class="cont-phone" pattern="[0-9]{10}" required />
                            <input id="idcontemail" name="contemail" type="email" placeholder="Email" class="cont-email"
                                required />
                            <textarea class="cont-contect" cols="80" rows="6" placeholder="Nội dung"
                                required></textarea>
                            <input type="submit" value="Gửi yêu cầu" class="submit-btn" />
                        </form>
                        <div class="contact-items">
                            <div class="contact-hov">
                                <span>Hotline</span>
                                <div class="contact-info">
                                    <p class="ph-contact">0968.868.227</p>
                                </div>
                            </div>
                            <div class="contact-hov">
                                <span>Email</span>
                                <div class="contact-info">
                                    <p class="tel-contact"><a style="color: #fff;" href="">
                                            ahpmedia@ahpvn.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIL-BOX -->

    <!-- SLIDE BANNER -->
    <section class="header-bg-parent">
        <div class="header-col1"></div>
        <div class="swiper1 Swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 576px)" srcset="images/hinh.png">
                        <img class="slider-bar" src="images/baner1.png" alt="">
                    </picture>
                </div>
                <div class="swiper-slide">
                    <picture>
                        <source media="(max-width: 576px)" srcset="images/hinh2.jpg">
                        <img class="slider-bar" src="images/Banner2.jpg" alt="">
                    </picture>
                </div>
              
               
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="clear"></div>
    </section>
    <!-- END SLIDE BANNER -->


    <!-- AHP-HERE-TO-HELP-YOU -->
    <section class="container ccc">
        <div class="head-service"><h3> AHP AGENCY LUÔN Ở ĐÂY ĐỂ GIÚP BẠN</h3></div>
        
        <div class="box1">
            <iframe  class="embed-responsive-item" src="https://www.youtube.com/embed/htWsFwsbbPM?mute=1&amp;showinfo=0&amp;controls=1&amp;start=0&amp;autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen="" ></iframe>
        </div>
        <div class="box2" >
            <h2>Chủ doanh nghiệp đang đau đầu?</h2>
            <p>🔸Làm thế nào để biết khách hàng thực sự muốn gì?</p>
            <p>🔸Không biết marketing thế nào để sản phẩm của mình KHÁC BIỆT, ngoài việc chỉ biết hạ giá để cạnh tranh</p>
            <p>🔸Hoạt động kinh doanh không tốt. </p>
            <p>🔸Tốn nhiều chi phí quảng cáo nhưng hiệu quả chưa tối ưu</p>
            <p class="teo">“Nếu một trong các vấn đề trên vẫn đang là bế tắc của bạn thì AHP Agency chính là giải pháp tốt nhất giúp bạn giải quyết vấn đề này.  Hãy để AHP Agency giúp bạn giải quyết các vấn đề trên</p>
        </div>
   </section>
    <!-- END AHP-HERE-TO-HELP-YOU -->

    <!-- PARTNER -->
    <Section id="project">
        <div class="container">
            <div class="head-service">
                <h3>ĐỐI TÁC</h3>
            </div>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/1.png" class="img-responsive" />
                    </div>
                </div>
                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/2.png" class="img-responsive" />
                    </div>
                </div>

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/3.png" class="img-responsive" />
                    </div>
                </div>
                         

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/4.png" class="img-responsive" />
                    </div>
                </div>

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/5.png" class="img-responsive" />
                    </div>
                </div>

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/6.png" class="img-responsive" />
                    </div>
                </div>

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/7.png" class="img-responsive" />
                    </div>
                </div>

                <div class="item">
                    <div class="owl-img-par">
                        <img src="images/logo/8.png" class="img-responsive" />
                    </div>
                </div>
                
            </div>
        </div>
    </Section>
    <!-- END PARTNER -->

    <!-- SERVICE -->
    <section class="container ">
        <div class="head-service">
            <h3>DỊCH VỤ TIÊU BIỂU</h3>
        </div>
        <div class="hero-service">
            <div class="items-service it0">
                <img class="img-service" src="images/dichvutieubieu/tuvan.jpg" alt="">
                <h3>Tư vấn thương hiệu</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Chiến lược thương hiệu</li>
                        <li>Tái định vị thương hiệu</li>
                        <li>Ra mắt thương hiệu</li>
                        <li>Quy chế thương hiệu</li>
                        <li>Mở rộng thương hiệu</li>
                        <li>Định giá thương hiệu</li>
                        <img class="img-service2" src="images/dichvutieubieu/tuvan.jpg" alt="">
                    </ul>
                </div>
            </div>
            <div class="items-service it1">
                <img class="img-service" src="images/dichvutieubieu/thietkethuonghieu.jpg" alt="">
                <h3>Thiết kế thương hiệu</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Thiết kế logo</li>
                        <li>Nhận diện thương hiệu</li>
                        <li>Đặt tên thương hiệu</li>
                        <li>Nhận diện văn phòng</li>
                        <li>Sáng tác slogan</li>
                        <li>Nhận diện điểm bán</li>
                        <img class="img-service2" src="images/dichvutieubieu/thietkethuonghieu.jpg" alt="">
                    </ul>
                </div>
            </div>
        
          <div class="items-service it2">
                <img class="img-service" src="images/dichvutieubieu/congngheso.jpg" alt="">
                <h3>Thương hiệu số</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Thiết kế website</li>
                        <li>UX UI design</li>
                        <li>Nhận diện số</li>
                        <li>Online Sales Kit</li>
                        <li>landing page</li>
                        <li>Giải pháp VR360</li>
                        <img class="img-service2" src="images/dichvutieubieu/congngheso.jpg" alt="">
                    </ul>
                </div>
            </div>
            <div class="items-service it3">
                <img class="img-service" src="images/dichvutieubieu/thietkebaobi.jpg" alt="">
                <h3>Bao bì nhãn mác</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Bao bì sản phẩm</li>
                        <li>Nhãn mác sản phẩm</li>
                        <li>Kiểu dáng công nghiệp</li>
                        <li>Nhãn mác sản phẩm</li>
                        <li>Nhãn mác dược phẩm</li>
                        <li>Nhãn mác đồ uống</li>
                        <img class="img-service2" src="images/dichvutieubieu/thietkebaobi.jpg" alt="">
                    </ul>
                </div>
            </div>
            
            <div class="items-service it4">
                <img class="img-service" src="images/dichvutieubieu/banquyen.jpg" alt="">
                <h3>Bản quyền & Giấy phép</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Bảo hộ nhãn hiệu</li>
                        <li>Công bố sản phẩm</li>
                        <li>Bảo hộ quốc tế</li>
                        <li>Mã số mã vạch</li>
                        <li>Bản quyền tác giả</li>
                        <li>Giấy phép quảng cáo</li>
                        <img class="img-service2" src="images/dichvutieubieu/banquyen.jpg" alt="">
                    </ul>
                </div>
            </div>
            
            <div class="items-service it5">
                <img class="img-service" src="images/dichvutieubieu/truyenthong.jpg" alt="">
                <h3>Truyền thông</h3>
                <div class="list-service">
                    <ul class="items-list-service">
                        <li>Brand Lauching</li>
                        <li>Corporate Brand Image</li>
                        <li>Digital Branding</li>
                        <li>Social Branding</li>
                        <li>Kế hoạch truyền thông</li>
                        <li>Kế hoạch marketing</li>
                        <img class="img-service2" src="images/dichvutieubieu/truyenthong.jpg" alt="">
                    </ul>
                </div>
            </div>
            
        </div>
        
    </section>
    <!-- END SERVICE -->

    <!-- WHY CHOOSE US -->
    <section class="container">
        <div class="hero-about">
            <img class="img-head-about" src="images/why-choose-us.png" alt="">
            <div class="contain-about">
                <div class="items-about">
                    <h3>TẠI SAO NÊN CHỌN AHP AGENCY?</h3>
                    <p>Công ty Truyền Thông AHP MEDIA đã được thành lập với mục đích mang đến những giải pháp truyền
                        thông
                        tiên
                        tiến và chất lượng cao cho các doanh nghiệp và tổ chức.</p>
                </div>
                <div class="icon-about">
                    <div class="icon-about-items">
                        <img src="images/about/icon-about01.png" alt="">
                        <span>CHẤT LƯỢNG </span>
                    </div>
                    <div class="icon-about-items">
                        <img src="images/about/icon-about02.png" alt="">
                        <span>CHUYÊN NGHIỆP </span>
                    </div>
                    <div class="icon-about-items">
                        <img src="images/about/icon-about03.png" alt="">
                        <span>TẬN TÂM</span>
                    </div>
                    <div class="icon-about-items">
                        <img src="images/about/icon-about04.jpg" alt="">
                        <span>UY TÍN</span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END WHY CHOOSE US -->

    <!-- REPORT-CUSTOMER -->
    <section class="container">
        <div class="head-service">
            <h3>KHÁCH HÀNG ĐÁNH GIÁ</h3>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text">Tôi rất hài lòng với dịch vụ của AHP Agency, họ thực hiện các chiến dịch truyền thông và quảng cáo với sự chuyên nghiệp và hiệu quả cao. Tôi đã nhận được nhiều phản hồi tích cực từ khách hàng và doanh số bán hàng của tôi cũng tăng lên đáng kể.</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/testimonial/testi1.jpg" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Bếp Bánh Ken's </span>
                                <span class="card__name">IT AHP Agency</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text"> Tôi rất hài lòng với dịch vụ của AHP Agency, họ thực hiện các chiến dịch truyền thông và quảng cáo với sự chuyên nghiệp và hiệu quả cao. Tôi đã nhận được nhiều phản hồi tích cực từ khách hàng và doanh số bán hàng của tôi cũng tăng lên đáng kể                                       
                                 .</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/testimonial/testi1.jpg" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Mr.Văn Mạnh</span>
                                <span class="card__name">IT AHP Agency</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text">Tôi rất đánh giá cao sự tận tâm và hỗ trợ của đội ngũ AHP Agency. Họ luôn sẵn sàng tư vấn và hỗ trợ tôi trong quá trình triển khai chiến dịch truyền thông và quảng cáo, giúp tôi hiểu rõ hơn về chiến lược và cách thức thực hiện                                                      
                                  .</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/testimonial/testi1.jpg" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Mr.Văn Mạnh</span>
                                <span class="card__name">IT AHP Agency</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text">Tôi cũng rất thích cách tiếp cận sáng tạo và đổi mới của AHP Agency. Họ không ngừng đưa ra những ý tưởng mới để làm cho chiến dịch của tôi trở nên độc đáo và thu hút được sự chú ý của khách hàng. Tôi tin tưởng rằng với sự sáng tạo và đổi mới này, AHP Agency sẽ giúp tôi đạt được nhiều thành công hơn trong tương lai.</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/testimonial/testi1.jpg" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Mr.Văn Mạnh</span>
                                <span class="card__name">IT AHP Agency</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- END REPORT-CUSTOMER -->

    <!--PROJECT -->
    <section class="container">
        <div class="head-service">
            <h3>DỰ ÁN ĐÃ THỰC HIỆN</h3>
        </div>
        <div class="js-project">
            <li><button id="btn-pr1" class="btn-project">THƯƠNG HIỆU</button> </li>
            <li><button id="btn-pr1" class="btn-project">BAO BÌ</button> </li>
            <li><button id="btn-pr1" class="btn-project">QUẢNG CÁO</button> </li>
            <li><button id="btn-pr1" class="btn-project">MARKETING</button> </li>
            <li><button id="btn-pr1" class="btn-project">WEBSITE</button> </li>
        </div>
        <!-- slide-1 -->
        <div id="slide1" class="contain-blk">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.7">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="./du-an-la-siesta.html">
                            <h4>RESORT & SPA LA SIESTA</h4>
                        </a>
                        <p>Nhận diện</p>
                    </div>

                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/Zony peanut/Ảnh con mục dự án Tony Peanut.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="./zony-peanut.html">
                            <h4>TONY PEANUT</h4>
                        </a>
                        <p>Nhận diện, bao bì, quảng cáo</p>
                    </div>
                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/Vina coffee/Ảnh con mục dự án.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="./Vina-coffee.html">
                            <h4>VINA COFFEE</h4>
                        </a>
                        <p>Bao bì, bộ quà tặng</p>
                    </div>
                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/Ken-mum/Ảnh con mục dự án ken mum.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="/Ken-mum.html">
                            <h4>KEN'S MUM</h4>
                        </a>
                        <p>NHẬN DIỆN</p>
                    </div>
                </div>
                <!--
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="./du-an-la-siesta.html">
                            <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                        </a>
                        <p>NHẬN DIỆN</p>
                    </div>
                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="/du-an-la-siesta.html">
                            <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                        </a>
                        <p>NHẬN DIỆN</p>
                    </div>
                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="/du-an-la-siesta.html">
                            <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                        </a>
                        <p>NHẬN DIỆN</p>
                    </div>
                </div>
            -->
            </div>
        </div>
        <!-- slide-2 -->
        <div id="slide2" class="contain-blk" style="display: none;">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.7">
                        <img class="img-project" src="images/homecontact-bg.jpg" alt="">
                    </div>
                    <a href="/du-an-la-siesta.html">
                        <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                    </a>
                    <p>NHẬN DIỆN</p>
                </div>
            </div>
        </div>
        <!-- slide-3 -->
        <div id="slide3" class="contain-blk" style="display: none;">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.7">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <a href="/du-an-la-siesta.html">
                        <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                    </a>
                    <p>NHẬN DIỆN</p>
                </div>
            </div>
        </div>
        <!-- slide 4 -->
        <div id="slide4" class="contain-blk" style="display: none;">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <h4>VECO</h4>
                    <p>NHẬN DIỆN</p>
                </div>
            </div>
        </div>
        <!-- slide 5 -->
        <div id="slide5" class="contain-blk" style="display: none;">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/ảnh phần dự án đã thực hiện La Siesta.jpg" alt="">
                    </div>
                    <h4>VECO</h4>
                    <p>NHẬN DIỆN</p>
                </div>
            </div>
        </div>
    </section>
    <!-- END PROJECT -->



    <!-- NEWS-INDEX -->
    <section class="container">
            <div class="head-service">
                <h3 style="color: #D00000;">TIN TỨC</h3>
            </div>
            <div class="hero-news">
            <?php  if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 4;
            $offset = ($pageno-1) * $no_of_records_per_page;
            
    
            $total_pages_sql = "SELECT COUNT(*) FROM tblposts ";
            $result = mysqli_query($con,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);
    
            $query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
            if($result){
            while ($row=mysqli_fetch_array($query)) {
            ?>
                <div class="items-news" >
                <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"> <img class="img-news" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt=""> </a>
                    <div class="news-abs">
                        <h2><a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>"> <?php echo htmlentities($row['posttitle']);?></a></h2>
                    </div>
                    <div class="card-footer text-muted">
                  Posted on <?php echo htmlentities($row['postingdate']);?>
               
                </div>
                </div>
            <?php }} ?>
            </div>
        </section>
    <div class=" bg-hero">
        <div class="container">
            <div class="hero-footer">
                <div class="items-footer1">
                    <h4 style="color: #fff;">ĐĂNG KÍ NHẬN THÔNG TIN TỪ AHP MEDIA</h4>
                </div>
                <div class="items-footer2">
                    <form method="POST" action="email-script.php">
                        <input type="text" placeholder="Họ Tên" name="contname" id="contname" class="footer-frm-name">
                        <input type="text" placeholder="Email" name="contemail" id="contemail" class="footer-frm-email">
                        <button style="color: rgb(120, 8, 8);" type="submit" class="footer-frm-submit">Đăng ký nhận thông tin</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-all">
        <div class="container-footer">
            <div class="footer-ct">
                <div class="contain-col1">
                    <a href="index.html"><img src="images/logo AHP Agency trắng.png" class="logo-footer"></a>
                    <div class="loc-footer">
                        <p> <i class="fa-solid fa-envelope"></i> <span class="tel-footer">ahpmedia@ahpvn.com</span></p>
                        <p> <i class="fa fa-mobile-phone"></i></i><span class="email-footer">
                                096.88.68.227</span></p>
                        <p> <i class="fa-solid fa-location-dot"></i><span class="location-footer"> Lầu 3, Số
                                666/10/1-3-5, Đường 3/2, Phường 14, Quận
                                10, TP.HCM.</span></p>
                    </div>
                </div>
                <div class="contain-col2">
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Về chúng tôi </h3>
                            <button onclick="toggleDropdown('dropdown-content-1')"><i
                                    class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <div id="dropdown-content-1" class="dropdown-content">
                            <p>Giới thiệu AHP</p>
                            <p>Văn hóa AHP</p>
                            <p>Tuyển dụng</p>
                            <p>Đội ngũ nhân sự</p>
                            <p>Khách hàng của AHP</p>
                            <p>Bản tin của AHP</p>
                            <p>Hồ sơ năng lực</p>
                        </div>
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Dịch vụ cung cấp </h3>
                            <button onclick="toggleDropdown('dropdown-content-2')"><i
                                    class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <div id="dropdown-content-2" class="dropdown-content">
                            <p>Tư vấn thương hiệu</p>
                            <p>Thiết kế thương hiệu</p>
                            <p>Nhận diện thương hiệu</p>
                            <p>Thương hiệu mới</p>
                            <p>Kế hoạch truyền thông</p>
                            <p>Digital marketing</p>
                        </div>
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Dự án đã thực hiện </h3><button onclick="toggleDropdown('dropdown-content-3')"><i
                                    class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <div id="dropdown-content-3" class="dropdown-content">
                            <p>Logo</p>
                            <p>Đặt tên/slogan</p>
                            <p>Web/app</p>
                            <p>Bao bì</p>
                            <p>Calatogue/Profile</p>
                            <p>Calatogue/Profile</p>
                        </div>
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Đơn vị thành viên </h3>
                            <button onclick="toggleDropdown('dropdown-content-4')"><i
                                    class="fa-solid fa-caret-down"></i></button>
                        </div>
                        <div id="dropdown-content-4" class="dropdown-content">
                            <p>AHP Digital</p>
                            <p>AHP Pakaging</p>
                            <p>AHP Academy</p>
                            <p>AHP Brandgifts</p>
                            <p>LogoArt</p>
                        </div>
                    </div>
                </div>
            </div>
    </footer>
    <div class="ban-footer">
        <div class="container">
            <div class="social-icons-footer">
                <h4>Theo dõi chúng tôi</h4>
                <div>
                    <a href="https://www.facebook.com/profile.php?id=100090142604061"><i
                            class="fa-brands fa-facebook-f fb "></i></a>
                    <a href="https://www.tiktok.com/@ahp.tv?is_from_webapp=1&sender_device=pc"><i
                            class="fa-brands fa-tiktok fb icon-fl"></i></a>
                    <a href=""><i class="fa-brands fa-youtube fb icon-fl"></i></a>
                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <Script src="js/jquery-ui.min.js"></Script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <Script src="js/extrenaljq.js" type="text/javascript"></Script>
    <script src="js/plugins.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/pop.js"></script>
    <script src="js/translate.js"></script>
    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="js/swiper.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>

    <script>
        VanillaTilt.init(document.querySelectorAll(".img-project"), {
            max: 1,
            speed: 900,
            glare: true,
            "max-glare": 1,
        });
    </script>
    <script>
        function toggleDropdown(id) {
            var dropdown = document.getElementById(id);
            if (dropdown.style.display === "none") {
                dropdown.style.display = "block";
            } else {
                dropdown.style.display = "none";
            }
        }
    </script>
    <script>
        if (window.location.hostname.substr(0, 4) !== 'www.') {
            window.location.replace('http://www.' + window.location.hostname + window.location.pathname + window.location.hash);
        }

    </script>
    <style>
    .switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 20px;
  width: 20px;
  left: 3px;
  bottom: 3px;
  background-image: url("images/viet.png");
  background-size: contain;
  background-repeat: no-repeat;
  -webkit-transition: .4s;
  transition: .4s;
}


input:checked + .slider {
  background-color: #baadab;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
  background-image: url("images/eng.png");
}

.slider.round {
  border-radius: 30px;
}

.slider.round:before {
  border-radius: 50%;
}

</style>  
</body>

</html>