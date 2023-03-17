<?php 
session_start();
include('includes/config.php');
//Genrating CSRF Token
if (empty($_SESSION['token'])) {
 $_SESSION['token'] = bin2hex(random_bytes(32));
}

if(isset($_POST['submit']))
{
  //Verifying CSRF Token
if (!empty($_POST['csrftoken'])) {
    if (hash_equals($_SESSION['token'], $_POST['csrftoken'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$postid=intval($_GET['nid']);
$st1='0';
$query=mysqli_query($con,"insert into tblcomments(postId,name,email,comment,status) values('$postid','$name','$email','$comment','$st1')");
if($query):
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
    <script src="https://kit.fontawesome.com/36fcf59f66.js" crossorigin="anonymous"></script>
</head>

<body>
    <a class=" blinking-phone"> <i class="fa fa-mobile-phone"></i></a>
    <a data-modal-target="#mod-modal" class="blinking-email"> <i class="fa-solid fa-envelope"
            aria-hidden="true"></i></a>

    <div id="arrow">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </div>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html"><img class="bfg" src="images/logo AHP Agency.png"
                                alt="Logo"></a>
                        <!-- Navbar Toggler -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#worldNav"
                            aria-controls="worldNav" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa-solid fa-sliders"></i></button>
                        <!-- Navbar -->
                        <div class="collapse navbar-collapse" id="worldNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">
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
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="Service.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <div class="name"><span data-text="DỊCH VỤ">DỊCH VỤ</span>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="Trangcon_1.html">Thiết kế thương hiệu</a>
                                        <a class="dropdown-item" href="#">Thiết kế logo</a>
                                        <a class="dropdown-item" href="#">Bộ nhận diện thương hiệu</a>
                                        <a class="dropdown-item" href="#">Nhận diện thương hiệu văn phòng</a>
                                        <a class="dropdown-item" href="#">Thiết kế Marketing</a>
                                        <a class="dropdown-item" href="#">Thiết kế Brochure</a>
                                        <a class="dropdown-item" href="#">Thiết kế Profile</a>
                                        <a class="dropdown-item" href="#">Thiết kế Catalogue</a>
                                        <a class="dropdown-item" href="#">Nhận diện thương hiệu số</a>
                                        <a class="dropdown-item" href="#">Thiết kế Landing Page</a>
                                        <a class="dropdown-item" href="#">Thiết kế Website</a>
                                        <a class="dropdown-item" href="#">Giao diện Profile</a>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="News.html">
                                        <div class="name"><span data-text="TIN TỨC">TIN TỨC</span></div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a data-modal-target="#mod-modal" class="nav-link name1">
                                        <div class="name name2"><span data-text="LIÊN HỆ">LIÊN HỆ</span></div>
                                    </a>
                                    <div class="mod-modal" id="mod-modal">
                                        <div class="mod-header">
                                            <div class="mod-title">LIÊN HỆ NGAY</div>
                                            <button data-close-button class="mod-close-button">&times;</button>
                                        </div>
                                        <!-- MOD-BODY -->
                                        <div class="mod-body">
                                            <div class="mod-items1">
                                                <p class="mod-p">Công ty Truyền Thông AHP MEDIA đã được thành lập với
                                                    mục đích mang
                                                    đến những giải pháp truyền thông
                                                    tiên
                                                    tiến và chất lượng cao cho các doanh nghiệp và tổ chức.</p>
                                                <img class="mod-img" src="images2/business/business_3.png" alt="">
                                                <div class="contain-contact">
                                                    <div class="nav-contact">
                                                        <div class="contact-items">
                                                            <div class="contact-hov">
                                                                <span><i class="fa-solid fa-phone"></i> TEL</span>
                                                                <div class="contact-info">
                                                                    <p class="ph-contact">096.88.68.227</p>
                                                                </div>
                                                            </div>
                                                            <div class="contact-hov">
                                                                <span><svg xmlns="http://www.w3.org/2000/svg"
                                                                        viewBox="0 0 48 48" width="20px" height="20px">
                                                                        <path fill="#35c1f1"
                                                                            d="M41.621,5.058l-35.9,12.281c-0.747,0.255-0.967,1.205-0.409,1.763l23.585,23.585 c0.558,0.558,1.508,0.338,1.763-0.409l12.281-35.9C43.222,5.561,42.439,4.778,41.621,5.058z">
                                                                        </path>
                                                                        <path fill="#1b9de2"
                                                                            d="M38,10L13,26.789V34c0,0.552,0.448,1,1,1h7.211L38,10z">
                                                                        </path>
                                                                    </svg> Email</span>
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
                                                    <form id="form" class="hero-form" action="/">
                                                        <input id="idcontname" name="contname" type="text"
                                                            placeholder="Họ Tên" class="cont-name" />
                                                        <input id="idcontloc" name="contloc" type="location"
                                                            placeholder="Địa Chỉ" class="cont-loc" />
                                                        <input id="idcontphone" name="contphone" type="phone"
                                                            placeholder="Số Điện Thoại" class="cont-phone" />
                                                        <input id="idcontemail" name="contemail" type="email"
                                                            placeholder="Email" class="cont-email" />
                                                        <textarea class="cont-contect" cols="80" rows="6"
                                                            placeholder="Nội dung"></textarea>
                                                        <input type="submit" value="Xác Nhận" class="submit-btn" />
                                                    </form>
                                                    <div class="contact-items">
                                                        <div class="contact-hov">
                                                            <span><i class="fa-solid fa-phone"></i> TEL</span>
                                                            <div class="contact-info">
                                                                <p class="ph-contact">096.88.68.227</p>
                                                            </div>
                                                        </div>
                                                        <div class="contact-hov">
                                                            <span><i class="fa-solid fa-envelope"></i> Email</span>
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
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <section class="header-bg-parent">
        <div class="header-col1">
        </div>
        <!--header-col1-->
        
        <!--header-col2-->
        <div class="clear"></div>
        <!--clear-->

    </section>

    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php
$pid=intval($_GET['nid']);
 $query=mysqli_query($con,"select tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.id='$pid'");
while ($row=mysqli_fetch_array($query)) {
?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
              <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid'])?>"><?php echo htmlentities($row['category']);?></a> |
                <b>Sub Category : </b><?php echo htmlentities($row['subcategory']);?> <b> Posted on </b><?php echo htmlentities($row['postingdate']);?></p>
                <hr />

 <img class="img-fluid rounded" src="admin/postimages/<?php echo htmlentities($row['PostImage']);?>" alt="<?php echo htmlentities($row['posttitle']);?>">
  
              <p class="card-text"><?php 
$pt=$row['postdetails'];
              echo  (substr($pt,0));?></p>
             
            </div>
            <div class="card-footer text-muted">
             
           
            </div>
          </div>
<?php } ?>
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
                    <div class="social-icons-footer">
                        <h4>Theo dõi chúng tôi</h4>
                        <a href="https://www.facebook.com/profile.php?id=100090142604061"><i
                                class="fa-brands fa-facebook-f fb "></i></a>
                        <a href="https://www.tiktok.com/@ahp.tv?is_from_webapp=1&sender_device=pc"><i
                                class="fa-brands fa-tiktok fb icon-fl"></i></a>
                        <a href=""><i class="fa-brands fa-youtube fb icon-fl"></i></a>

                    </div>
                </div>
                <div class="contain-col2">
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Về chúng tôi <button onclick="toggleDropdown('dropdown-content-1')"><i
                                        class="fa-solid fa-caret-down"></i></button></h3>
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
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Dịch vụ cung cấp <button onclick="toggleDropdown('dropdown-content-2')"><i
                                        class="fa-solid fa-caret-down"></i></button></h3>
                            <div id="dropdown-content-2" class="dropdown-content">
                                <p>Tư vấn thương hiệu</p>
                                <p>Thiết kế thương hiệu</p>
                                <p>Nhận diện thương hiệu</p>
                                <p>Thương hiệu mới</p>
                                <p>Kế hoạch truyền thông</p>
                                <p>Digital marketing</p>
                            </div>
                        </div>
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Dự án đã thực hiện <button onclick="toggleDropdown('dropdown-content-3')"><i
                                        class="fa-solid fa-caret-down"></i></button></h3>
                            <div id="dropdown-content-3" class="dropdown-content">
                                <p>Logo</p>
                                <p>Đặt tên/slogan</p>
                                <p>Web/app</p>
                                <p>Bao bì</p>
                                <p>Calatogue/Profile</p>
                                <p>Calatogue/Profile</p>
                            </div>
                        </div>
                    </div>
                    <div class="foot-cl2">
                        <div class="footer-rows">
                            <h3>Đơn vị thành viên <button onclick="toggleDropdown('dropdown-content-4')"><i
                                        class="fa-solid fa-caret-down"></i></button></h3>
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
            </div>
    </footer>

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