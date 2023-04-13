<?php
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

if (isset($_POST['submit'])) {
    //Verifying CSRF Token
    if (!empty($_POST['csrftoken'])) {
        if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
            $postid = intval($_GET['nid']);
            $st1 = '0';
            $query = mysqli_query($con, "insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
            if ($query) :
                echo "<script>alert('comment successfully submit. Comment will be display after admin review ');</script>";
                unset($_SESSION['token']);
            else :
                echo "<script>alert('Something went wrong. Please try again.');</script>";

            endif;
        }
    }
}
?>
<!DOCTYPE html>
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
    <link rel="stylesheet" href="scss/style.scss?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
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
                        <a class="navbar-brand" href="./"><img class="bfg" src="images/logo AHP Agency.png" alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav" aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><i class="fa-solid fa-sliders"></i></button>
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
                                    <a class="nav-link dropdown-toggle" href="Service.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                                <img class="mod-img" src="images2/business/business_3.png" alt="">
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
                                                                    <p class="tel-contact"><a style="color: #fff;" href=""> ahpmedia@ahpvn.com</a></p>
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
                                                    <form id="form" class="hero-form" action="/">
                                                        <input id="idcontname" name="contname" type="text" placeholder="Họ Tên" class="cont-name" required />
                                                        <input id="idcontloc" name="contloc" type="location" placeholder="Địa Chỉ" class="cont-loc" required />
                                                        <input id="idcontphone" name="contphone" type="phone" placeholder="Số Điện Thoại" class="cont-phone" pattern="[0-9]{10}" required />
                                                        <input id="idcontemail" name="contemail" type="email" placeholder="Email" class="cont-email" required />
                                                        <textarea class="cont-contect" cols="80" rows="6" placeholder="Nội dung" required></textarea>
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
                                        <button class="btn-translate" onclick="translateToEnglish()"> En</button>
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
        <a class="blinking-messenger" href="https://m.me/ahp.agency" target="_blank"><i class="fab fa-facebook-messenger"></i></a>
    </div>


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
                    <img class="mod-img" src="images2/business/business_3.png" alt="">
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
                        <form id="form" class="hero-form" action="/">
                            <input id="idcontname" name="contname" type="text" placeholder="Họ Tên" class="cont-name" required />
                            <input id="idcontloc" name="contloc" type="location" placeholder="Địa Chỉ" class="cont-loc" required />
                            <input id="idcontphone" name="contphone" type="phone" placeholder="Số Điện Thoại" class="cont-phone" pattern="[0-9]{10}" required />
                            <input id="idcontemail" name="contemail" type="email" placeholder="Email" class="cont-email" required />
                            <textarea class="cont-contect" cols="80" rows="6" placeholder="Nội dung" required></textarea>
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

    <section class="header-bg-parent">
        <div class="header-col1">
        </div>
        <!--header-col1-->
        <div class="swiper1 Swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="slider-bar" src="images/ảnh bìa website.jpg" alt=""></div>
                <div class="swiper-slide"><img class="slider-bar" src="images/ảnh bìa website.jpg" alt=""></div>
                <div class="swiper-slide"><img class="slider-bar" src="images/ảnh bìa website.jpg" alt=""></div>
                <div class="swiper-slide"><img class="slider-bar" src="images/ảnh bìa website.jpg" alt=""></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

        <!--header-col2-->
        <div class="clear"></div>
        <!--clear-->

    </section>
    <section class="content-body">
        <div class="container">



            <div class="row" style="margin-top: 4%">

                <!-- Blog Entries Column -->
                <div class="col-md-8">

                    <!-- Blog Post -->
                    <?php
                    $pid = intval($_GET['nid']);
                    $query = mysqli_query($con, "select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <div class="card mb-4" style="   margin-left: -25px;margin-right: -25px; border: 1px solid white">

                            <div class="card-body">
                                <h2 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h2>
                                <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid']) ?>"><?php echo htmlentities($row['category']); ?></a> |
                                    <b>Sub Category : </b><?php echo htmlentities($row['subcategory']); ?> <b> Posted on </b><?php echo htmlentities($row['postingdate']); ?>
                                </p>
                                <hr />

                                <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>">

                                <p class="card-text"><?php
                                                        $pt = $row['postdetails'];
                                                        echo (substr($pt, 0)); ?></p>

                            </div>
                            <div class="card-footer text-muted">


                            </div>
                        </div>
                    <?php } ?>
                </div>

                <!-- Sidebar Widgets Column -->
                <?php include('includes/sidebar.php'); ?>
            </div>
            <!-- /.row -->
            <!---Comment Section --->

            <div class="row" style="margin-top: -8%">
                <div class="col-md-8">
                    <div class="card my-4">
                        <h5 class="card-header">Leave a Comment:</h5>
                        <div class="card-body">
                            <form name="Comment" method="post">
                                <input type="hidden" name="csrftoken" value="<?php echo htmlentities($_SESSION['token']); ?>" />
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nhập họ và tên" required>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
                                </div>


                                <div class="form-group">
                                    <textarea class="form-control" name="comment" rows="3" placeholder="Comment" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary" name="submit">Gửi</button>
                            </form>
                        </div>
                    </div>

                    <!---Comment Display Section --->

                    <?php
                    $sts = 1;
                    $query = mysqli_query($con, "select name,comment,postingDate from  tblcomments where postId='$pid' and status='$sts'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <div class="media mb-4">
                            <img class="d-flex mr-3 rounded-circle" src="images/usericon.png" alt="">
                            <div class="media-body">
                                <h5 class="mt-0"><?php echo htmlentities($row['name']); ?> <br />
                                    <span style="font-size:11px;"><b>at</b> <?php echo htmlentities($row['postingDate']); ?></span>
                                </h5>

                                <?php echo htmlentities($row['comment']); ?>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>

    </section>
    <?php include 'footer.php' ?>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <Script src="js/jquery-ui.min.js"></Script>
    <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <Script src="js/extrenaljq.js" type="text/javascript"></Script>
    <script src="js/plugins.js"></script>
    <script src="js/dropdown-footer.js"></script>
    <!-- Bootstrap js -->
    <script src="js/popup-script.js"></script>
    <script src="js/popup-mail.js"></script>
    <script src="js/pop-modal.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/translate.js?v=1.0"></script>
    <script src='//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit'></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script src="js/swiper.js"></script>
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="js/dropdown-search.js"></script>
    <script src="js/popup-info.js"></script>

    <script>
        VanillaTilt.init(document.querySelectorAll(".img-project"), {
            max: 1,
            speed: 900,
            glare: true,
            "max-glare": 1,
        });
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
</html>