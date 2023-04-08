<?php
session_start();
include('includes/config.php');

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.5/sweetalert2.min.css" integrity="sha512-Sp6v1zcpU5eAR9MmWRH1IMiYpmDR8+b2c+z5U6w5U6FhU6E+hBLpX9bKjOKRnYRoYr/5i3Em3fZCxx2UiNn17g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.1.5/sweetalert2.min.js" integrity="sha512-zhe8W0C+ZweTZwZJfymcwGMa8GRQenmY/S8/bpWcA9Jk+cdmQ2ggh+DGLWJxM7wZD/wN+GdIbAaDK2nCfJq3sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>AHP Agency</title>
    <link rel="icon" type="image/x-icon" href="/images/ahp icon.png">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D&family=Lalezar&display=swap" rel="stylesheet">
    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <!--rubik font family -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Rubik:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!--custom css-->
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <!--media css-->
    <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!-- JS project -->
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>

    <!--jquery ui files-->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="scss/style.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:100,200,300,400,500,600,700,800,900">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
</head>

<body>
    <?php include 'header.php' ?>

    <!-- SLIDE BANNER -->
    <section class="header-bg-parent">
        <div class="header-col1"></div>
        <div class="swiper1 Swiper">
            <div class="swiper-wrapper">

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
        <div class="head-service">
            <h3> AHP AGENCY LUÔN Ở ĐÂY ĐỂ GIÚP BẠN</h3>
        </div>

        <div class="box1">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/htWsFwsbbPM?mute=1&amp;showinfo=0&amp;controls=1&amp;start=0&amp;autoplay=1" data-autoplay="1" frameborder="0" allowfullscreen=""></iframe>
        </div>
        <div class="box2">
            <h2>CHỦ DOANH NGHIỆP ĐANG ĐAU ĐẦU?</h2>
            <p>🔸Làm thế nào để biết khách hàng thực sự muốn gì?</p>
            <p>🔸Không biết marketing thế nào để sản phẩm của mình KHÁC BIỆT, ngoài việc chỉ biết hạ giá để cạnh tranh</p>
            <p>🔸Hoạt động kinh doanh không tốt. </p>
            <p>🔸Tốn nhiều chi phí quảng cáo nhưng hiệu quả chưa tối ưu</p>
            <p class="teo">“Nếu một trong các vấn đề trên vẫn đang là bế tắc của bạn thì AHP Agency chính là giải pháp tốt nhất giúp bạn giải quyết vấn đề này. Hãy để AHP Agency giúp bạn giải quyết các vấn đề trên</p>
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
                <a href="./tu-van-thuong-hieu.php">
                    <h3>Tư vấn thương hiệu</h3>
                </a>
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
                <a href="./thiet-ke-thuong-hieu.php">
                    <h3>Thiết kế thương hiệu</h3>
                </a>
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
                <a href="./thuong-hieu-so.php">
                    <h3>Thương hiệu số</h3>
                </a>
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
                <a href="./bao-bi-nhan-mac.php">
                    <h3>Bao bì nhãn mác</h3>
                </a>
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
                <a href="./ban-quyen-giay-phep.php">
                    <h3>Bản quyền & Giấy phép</h3>
                </a>
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
                <a href="./truyen-thong.php">
                    <h3>Truyền thông</h3>
                </a>
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
            <img class="img-head-about" src="images/huy chuong 2 (1).png" alt="">
            <div class="contain-about">
                <div class="items-about">
                    <h3>TẠI SAO NÊN CHỌN AHP AGENCY?</h3>
                    <p>Công ty Truyền Thông AHP AGENCY đã được thành lập với mục đích mang đến những giải pháp truyền
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
                        <p class="card__text">Mình cảm thấy rất ấn tượng với phong cách làm việc của các bạn: Trách nhiệm, tốc độ và niềm tin, chúc AHP Agency ngày càng phát triển.</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/logo/2.png" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Bếp Bánh Ken's </span>
                                <span class="card__name"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text"> Chúng tôi thấy đây là một dịch vụ cần thiết giúp chúng tôi tiết kiệm chi phí, giảm thời gian và tăng hiệu suất công việc.</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/logo/7.png" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">LA SIESTA</span>
                                <span class="card__name"></span>
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
                            <img class="img-testimonial" src="images/logo/3.png" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Vina coffee</span>
                                <span class="card__name"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card22 swiper-slide">
                    <div class="card__content">
                        <i class="fa-solid fa-quote-left"></i>
                        <p class="card__text">Website tôi đã được khoác một bộ áo mới nhờ đó lượng khách hàng truy cập nhiều hơn, Sản phẩm bán chạy hơn.</p>
                        <div class="container-testimoni">
                            <img class="img-testimonial" src="images/logo/5.png" alt="">
                            <div class="contain-testimoni">
                                <span class="card__title">Tony Peanut</span>
                                <span class="card__name"></span>
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
                        <a href="./la-sieta.php">
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
                        <a href="./zony-peanut.php">
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
                        <a href="./Vina-coffee.php">
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
                        <a href="./Ken-mum.php">
                            <h4>KEN'S MUM</h4>
                        </a>
                        <p>Nhận diện</p>
                    </div>
                </div>
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.8">
                        <img class="img-project" src="images/Mie/Ảnh con.jpg" alt="">
                    </div>
                    <div class="items-pa">
                        <a href="./Mie.php">
                            <h4>MIE</h4>
                        </a>
                        <p>Nhận diện</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- slide-2 -->
        <div id="slide2" class="contain-blk" style="display: none;">
            <div class="hero-project">
                <div class="items-project">
                    <div data-tilt data-tilt-glare data-tilt-max-glare="0.7">
                        <img class="img-project" src="images/homecontact-bg.jpg" alt="">
                    </div>
                    <a href="/du-an-la-siesta.php">
                        <h4>THIẾT KẾ THƯƠNG HIỆU LA SIESTA</h4>
                    </a>
                    <p>Nhận diện</p>
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
                    <a href="/du-an-la-siesta.php">
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
            <?php if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 4;
            $offset = ($pageno - 1) * $no_of_records_per_page;


            $total_pages_sql = "SELECT COUNT(*) FROM tblposts ";
            $result = mysqli_query($con, $total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
            if ($result) {
                while ($row = mysqli_fetch_array($query)) {
            ?>
                    <div class="items-news">
                        <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>"> <img class="img-news" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt=""> </a>
                        <div class="news-abs">
                            <h2><a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>"> <?php echo htmlentities($row['posttitle']); ?></a></h2>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on <?php echo htmlentities($row['postingdate']); ?>

                        </div>
                    </div>
            <?php }
            } ?>
        </div>
    </section>

    <?php include 'footer.php' ?>
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
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<audio id="notification-sound">
    <source src="./images/Tieng-ting-www_tiengdong_com.mp3" type="audio/mpeg">
</audio>

<style>
    /* Thêm animation vào hiển thị thông báo */
    .swal2-show {
        animation: swal2-show-animation 0.3s;
    }

    /* Hiệu ứng animation */
    @keyframes swal2-show-animation {
        0% {
            transform: scale(0.7);
            opacity: 0;
        }

        100% {
            transform: scale(1);
            opacity: 1;
        }
    }

<<<<<<< HEAD
.swal2-title {
  font-size: 24px;
  color: #333;
  margin-top: 20px;
}
=======
    .swal2-popup {
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }
>>>>>>> 4541e8b2976087b4a8841e68ab79a818ec86a052

    .swal2-title {
        font-size: 24px;
        color: #333;
        margin-top: 10px;
    }

    .swal2-content {
        font-size: 16px;
        color: #666;
        margin-top: 20px;
    }

    .swal2-success {
        background-image: url("https://cdn.jsdelivr.net/npm/sweetalert2@10/assets/success.png");
        background-size: cover;
        width: 80px;
        height: 80px;
        margin: 0 auto;
    }

    .swal2-actions {
        margin-top: 30px;
    }

    .swal2-confirm {
        background-color: #D00000;
        color: #D00000;
        border: none;
        border-radius: 3px;
        font-size: 16px;
        padding: 10px 20px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .swal2-confirm:hover {
        background-color: #D00000;
    }
</style>

<script>
<<<<<<< HEAD
  $(document).on('click', '#success', function(e) {
    Swal.fire({
      title: 'GỬI THÀNH CÔNG',
      text: 'Cảm ơn bạn đã điền thông tin! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.',
      icon: 'success',
      showClass: {
        popup: 'animated bounceIn'
      },
      hideClass: {
        popup: 'animated bounceOut'
      },
      onOpen: function() {
        var audioElement = document.getElementById('notification-sound');
        audioElement.play();
      }
=======
    $(document).on('click', '#success', function(e) {
        Swal.fire({
            title: 'Gửi thành công',
            text: 'Cảm ơn bạn đã điền thông tin! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể.',
            icon: 'success',
            showClass: {
                popup: 'animated bounceIn'
            },
            hideClass: {
                popup: 'animated bounceOut'
            },
            onOpen: function() {
                var audioElement = document.getElementById('notification-sound');
                audioElement.play();
            }
        });
>>>>>>> 4541e8b2976087b4a8841e68ab79a818ec86a052
    });
</script>
</html>