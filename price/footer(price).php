<head>
    <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <!--media css-->
    <link href="css/media.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
</head>
<div class=" bg-hero">
    <div class="container">
        <div class="hero-footer">
            <div class="items-footer1">
                <h3>Liên Hệ</h3>
                <h4>Kết nối với AHP Agency</h4>
                <h5>AHP AGENCY luôn sãn sàng lắng nghe và đưa ra giải pháp cho vấn để của bạn!</h5>
            </div>
            <div class="items-footer2">
                <form method="POST" action="email-script.php" accept-charset="utf-8" class="frm-css">
                    <div>
                        <label for="" class="label-footer">Họ và tên</label>
                        <input id="idcontname" name="contname" type="text" placeholder="Họ và tên của bạn" class="cont-name" required />
                        <label for="" class="label-footer">Số Điện Thoại</label>
                        <input id="idcontphone" name="contphone" type="location" placeholder="Sđt của bạn" class="cont-loc" pattern="[0-9]{10}" required />
                        <label for="" class="label-footer">Email</label>
                        <input id="idcontemail" name="contemail" type="Email" placeholder="Email của bạn" class="cont-phone" />
                    </div>
                    <div>
                        <label for="" class="label-footer">Lời nhắn của bạn</label>
                        <textarea name="noidung" class="cont-contect2" cols="80" rows="6" placeholder="Nội dung cần tư vấn" required></textarea>
                        <input id="success" type="submit" value="Đăng kí nhận thông tin" class="footer-frm-submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<footer class="footer-all">
    <div class="container-footer">
        <div class="footer-ct">
            <div class="contain-col1">
                <a href="../index.html"><img src="../images/logo AHP Agency trắng.png" class="logo-footer"></a>
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
                        <button onclick="toggleDropdown('dropdown-content-1')"><i class="fa-solid fa-caret-down"></i></button>
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
                        <button onclick="toggleDropdown('dropdown-content-2')"><i class="fa-solid fa-caret-down"></i></button>
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
                        <h3>Dự án đã thực hiện </h3><button onclick="toggleDropdown('dropdown-content-3')"><i class="fa-solid fa-caret-down"></i></button>
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


                    <a href="https://www.facebook.com/ahp.agency"><img class="aoll" src="../images/ảnh fanpage.jpg" alt=""></a>

                </div>
            </div>
        </div>
</footer>
<div class="ban-footer">
    <div class="container">
        <div class="social-icons-footer">
            <h4>Theo dõi chúng tôi</h4>
            <div>
                <a href="https://www.facebook.com/ahp.agency"><i class="fa-brands fa-facebook-f fb "></i></a>
                <a href="https://www.tiktok.com/@ahp.tv?is_from_webapp=1&sender_device=pc"><i class="fa-brands fa-tiktok fb icon-fl"></i></a>
                <a href="https://www.youtube.com/channel/UC69txnCkPNI_Q-JBqt0sKPA"><i class="fa-brands fa-youtube fb icon-fl"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>