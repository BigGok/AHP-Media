<?php 
session_start();
error_reporting(0);
include('includes/config.php');

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>AHP Agency</title>
    <link rel="icon" type="image/x-icon" href="/images/ahp icon.png">
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Search  Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
   <?php include('includes/header.php');?>

    <!-- Page Content -->
    <div class="container">


     
      <div class="row" style="margin-top: 4%">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <!-- Blog Post -->
<?php 
        if($_POST['searchtitle']!=''){
$st=$_SESSION['searchtitle']=$_POST['searchtitle'];
}
$st;
             




     if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;


        $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
        $result = mysqli_query($con,$total_pages_sql);
        $total_rows = mysqli_fetch_array($result)[0];
        $total_pages = ceil($total_rows / $no_of_records_per_page);


$query=mysqli_query($con,"select tblposts.id as pid,tblposts.PostTitle as posttitle,tblcategory.CategoryName as category,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.PostTitle like '%$st%' and tblposts.Is_Active=1 LIMIT $offset, $no_of_records_per_page");

$rowcount=mysqli_num_rows($query);
if($rowcount==0)
{
echo "No record found";
}
else {
while ($row=mysqli_fetch_array($query)) {


?>

          <div class="card mb-4">
      
            <div class="card-body">
              <h2 class="card-title"><?php echo htmlentities($row['posttitle']);?></h2>
         
              <a href="news-details.php?nid=<?php echo htmlentities($row['pid'])?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo htmlentities($row['postingdate']);?>
           
            </div>
          </div>
<?php } ?>

    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a href="?pageno=1"  class="page-link">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>" class="page-link">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?> page-item">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?> " class="page-link">Next</a>
        </li>
        <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
    </ul>
<?php } ?>
       

      

          <!-- Pagination -->




        </div>

        <!-- Sidebar Widgets Column -->
      <?php include('includes/sidebar.php');?>
      </div>
      <!-- /.row -->

    </div>

    <div class=" bg-hero">
        <div class="container">
            <div class="hero-footer">
                <div class="items-footer1">
                    <h4 style="color: #fff;">ĐĂNG KÍ NHẬN THÔNG TIN TỪ AHP MEDIA</h4>
                </div>
                <div class="items-footer2">
                    <form method="POST" action="email-script.php">
                        <input type="text" placeholder="Họ Tên" name="" id="" class="footer-frm-name">
                        <input type="text" placeholder="Email" name="" id="" class="footer-frm-email">
                        <input type="submit" value="Đăng kí nhận thông tin" class="footer-frm-submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->
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
                                class="fa-brands fa-facebook-f "></i></a>

                        <a href="https://www.tiktok.com/@ahp.tv?is_from_webapp=1&sender_device=pc"><i
                                class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/@ahpagency_08"><i class="fa-brands fa-youtube "></i></a>
                        <a href="https://www.instagram.com/ahpagency/"><i class="fa-brands fa-instagram"></i></a>


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

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>

</html>
