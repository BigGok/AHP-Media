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
<html>

<head>
    <title>AHP Agency</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/images/ahp icon.png">
    <!--/*font awesome icons*/-->
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <!--rubik font family -->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700;800&family=Rubik:ital,wght@0,400;0,700;1,700&display=swap" rel="stylesheet">
    <!--custom css-->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/news.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />

    <!--media css-->
    <link type="text/css" rel="stylesheet" href="css/media.css" />

    <!--jquery ui files-->
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.structure.min.css" />
    <link type="text/css" rel="stylesheet" href="css/jquery-ui.theme.min.css" />

    <!--owl carousel-->
    <link type="text/css" rel="stylesheet" href="css/owl.carousel.min.css" />
    <link type="text/css" rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="scss/style.scss">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <script type="text/javascript" src="js/vanilla-tilt.js"></script>
    <script src="https://kit.fontawesome.com/36fcf59f66.js" crossorigin="anonymous"></script>
</head>

<body>
<?php include 'header.php' ?>
    <!-- END MAIL-BOX -->
    <div class="container">
            <?php
            $pid = intval($_GET['nid']);
            $query = mysqli_query($con, "select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
            while ($row = mysqli_fetch_array($query)) {
            ?>
                        <h2 class="card-title"><?php echo htmlentities($row['posttitle']); ?></h2>
                        <hr />

                        <div class="card-pic"><?php
                                            $pt = $row['postdetails'];
                                            echo (substr($pt, 0)); ?>
                        </div>
                        
            <?php } ?>
    </div>
    <div class=" bg-hero">
        <div class="container">
            <div class="hero-footer">
                <div class="items-footer1">
                    <h4 style="color: #fff;">ĐĂNG KÍ NHẬN THÔNG TIN TỪ AHP MEDIA</h4>
                </div>
                <div class="items-footer2">
                    <form action="">
                        <input type="text" placeholder="Họ Tên" name="" id="" class="footer-frm-name">
                        <input type="text" placeholder="Email" name="" id="" class="footer-frm-email">
                        <input type="submit" value="Đăng kí nhận thông tin" class="footer-frm-submit">
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

</body>
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
</html>