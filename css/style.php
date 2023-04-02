<?php
    header("Content-type: text/css");
?>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

#mobile-menu {
    display: none;
}

.clear {
    clear: both;
}

.common-h5 {
    color: #0845a0;
    font-size: 14px;
    font-weight: 700;
    letter-spacing: 1px;
    margin-bottom: 7px;
}

.common-h2 {
    color: #6aa5ff;
    font-size: 30px;
    line-height: 38px;
}

.text-center {
    text-align: center;
}

.img-responsive {
    display: block;
    max-width: 90%;
    height: auto;
}

.container {
    max-width: 1330px;
    margin: 0 auto;
    padding-left: 15px;
    padding-right: 15px;

}

a {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 400;
}

.active {
    color: #6aa5ff !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: 'Nunito';
    font-weight: 800;
}

p {
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-weight: 400;
}

.mailbox-phone {
    position: fixed;
    top: 50%;
    right: 0;
    z-index: 9999;
    transform: translateY(-50%);
    display: flex;
    flex-direction: column;
    align-items: center;
}

.blinking-messenger {
    position: relative;
    display: flex;
    bottom: -20px;
    right: 25px;
    background-color: #f90606;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    font-weight: 700;
    width: 50px;
    height: 50px;
    border-radius: 50px;
    color: #fdfdfd;
}

.blinking-phone {
    position: relative;
    display: flex;
    bottom: -10px;
    right: 25px;
    background-color: #f90606;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    font-weight: 700;
    width: 50px;
    height: 50px;
    border-radius: 50px;
}

.blinking-email {
    position: fixed;
    transform: .5s ease;
    display: block;
    bottom: 100%;
    right: 25px;
    text-align: center;
    background-color: #fc0202;
    font-size: 20px;
    font-weight: 700;
    z-index: 9999;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    border-right: none;
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50px;
}

.fa-envelope::before {
    color: #fff;
}

.fa.fa-mobile-phone:before,
.fa.fa-mobile:before {
    color: #fff;
}

.fa-location-dot::before {
    color: #fff;
}

.blinking-email:before {
    content: "";
    position: absolute;
    z-index: -1;
    left: 50%;
    top: 50%;
    transform: translateX(-50%) translateY(-50%);
    display: block;
    width: 60px;
    height: 60px;
    background-color: #a40f0f;
    -webkit-animation: pulse-border 1500ms ease-out infinite;
    animation: pulse-border 1500ms ease-out infinite;
    border-radius: 50px;
}

.blinking-email:focus {
    border: none;
    outline: none;
}

@keyframes pulse-border {
    0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
    }

    100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
    }
}



#arrow i {
    position: fixed;
    transform: .5s ease;
    display: block;
    bottom: 20px;
    right: 25px;
    text-align: center;
    background-color: #fb0303;
    font-size: 20px;
    font-weight: 700;
    z-index: 9999;
    box-shadow: 0 0 20px rgba(0, 0, 0, .2);
    border-right: none;
    color: #fff;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    border-radius: 50px;
}


/* header*/

.fixed-header {
    position: fixed;
    width: 100%;
    z-index: 99;
    left: 0;
    top: 0;
    background-color: #fff;
    box-shadow: 10px 10px 20px #fff;
}

header {
    z-index: 1;
    position: relative;
}

.nav-col {
    float: left;
    width: 75%;
}


.cnt-info-col {
    float: right;
    text-align: right;
    width: 25%;
}

.logo {
    float: left;
    width: 30%;
}

.menu {
    float: right;
    width: 70%;
}

.logo img {
    width: 180px;
}

section.header-bg-parent {
    position: relative;
    top: -83px;
}

.header-col1 {
    float: left;
    width: 80%;
    position: absolute;
    top: 30%;
    left: 11%;
}



.header-col1 p {
    font-size: 18px;
    font-weight: 400;
    line-height: 26px;

}

section.header-bg-parent:after {
    content: "SEO";
    position: absolute;
    color: #fafbfc;
    top: 250px;
    left: -140px;
    font-size: 230px;
    transform: rotate(-90deg);
    font-family: "Rubik";
    font-weight: 800;
    letter-spacing: 5px;
    z-index: -1;
}

.hedaer-bg-par-img {
    position: absolute;
    bottom: -110px;
}


/*featuer par*/

.faeture-col-par {
    background-color: #fcfcfc;
    padding: 80px 0px;
    margin-top: 40px;
}

.feature-col {

    background-color: #fff;
    padding: 30px;
    width: 23%;
    float: left;
    margin-right: 1%;
    margin-left: 1%;
    box-shadow: 2px 2px 10px #fefefe;
    border-radius: 13px;
    transition: all 0.5s ease;
    height: 265px;
}

.feature-col:hover {
    background-color: #3b3663;
}

.feature-col:hover h3 {
    color: #fff;
}

.feature-col:hover h4 {
    color: #fff;
}

.feature-col h3 {
    font-family: 'Rubik', sans-serif;
    font-size: 18px;
    font-weight: 600;
}


.feature-col img {
    width: 80px;
    height: 80px;
    margin: 30px 0px;
}

.feature-col h4 {
    font-size: 14px;
    font-family: 'Rubik', sans-serif;
    color: #4d4d4d;
    margin-bottom: 20px;
}



/*progress bar */


.circle {
    width: 200px;
    margin: 6px 6px 20px;
    display: inline-block;
    position: relative;
    text-align: center;
    line-height: 1.2;
}

.circle canvas {
    vertical-align: top;
    width: 120px !important;
}

.circle strong {
    position: absolute;
    top: 30px;
    left: 0;
    width: 100%;
    text-align: center;
    line-height: 40px;
    font-size: 30px;
    color: black;
}

.circle strong i {
    font-style: normal;
    font-size: 0.6em;
    font-weight: normal;
}

.circle span {
    display: block;
    color: #aaa;
    margin-top: 12px;
}

.progress-bar-col {
    float: left;
    width: 30%;
}

.progress-info-col {
    float: right;
    width: 95%;
}

.expand-img-col {
    float: left;
    width: 50%;
    margin-top: 50px;
}

.expand-img-info-col {
    float: right;
    width: 50%;
    margin-top: 80px;
}

.expand-img {
    position: relative;
}

.expand-img-info {
    position: absolute;
    top: 130px;
    left: 180px;
    color: #ffff;
}

.expand-img-info i {
    font-size: 70px;
    padding-bottom: 20px;
}

.expand-img-info h2 {
    font-size: 46px;
    font-weight: 800;
    font-family: "Nunito";
    line-height: 60px;
}

.expand-img-info a {
    color: #fff;
    font-size: 16px;
    text-decoration: none;
    padding-top: 25px;
    display: inline-block;
}

.expand-img-info i.fa.fa-long-arrow-right {
    font-size: 17px;
}

.progress-info h3 {
    font-size: 25px;
    padding-bottom: 15px;
    color: #6aa5ff;
    font-family: "Nunito";
    font-weight: 600;
}

.progress-info p {
    color: #696687;
    font-size: 16px;
    font-family: "Rubik";
    line-height: 24px;
    padding-top: 10px;
}

.progress-info {
    margin: 30px 0px 60px;
}

section#expand {
    padding-top: 55px;
    margin: 90px 0px;
}


/*faq*/

section#faq-par {
    margin-top: 60px;
}

.faq-que-col {
    float: left;
    width: 47%;
    margin-top: 80px;
    margin-left: -10px;
}

.faq-bg-col {
    float: right;
    width: 50%;
}

.ui-accordion-header-active {
    background-image: linear-gradient(20deg, #ff841f 0%, #ff9721 57%) !important;
    border: none !important;
}

.ui-accordion-header-active:focus {
    outline: none;
    border: none;
}

div#faq-accordion p {
    color: #696687;
    font-size: 15px;
    font-weight: 400;
    font-family: "Rubik";
    line-height: 25px;
}

.faq-img-par {
    position: relative;
}

.faq-img-info {
    position: absolute;
    top: 110px;
    left: 170px;
    color: #fff;
}

.faq-img-info a {
    color: #fff;
    text-decoration: none;
    padding-top: 20px;
    display: inline-block;
}

.faq-img-info h2 {
    font-size: 40px;
    font-family: "Nunito";
    font-weight: 800;
    line-height: 55px;
}

.faq-img-info .fa-lightbulb-o {
    font-size: 70px;
    padding-bottom: 20px;
}

.faq-img-info p {
    font-size: 18px;
    font-family: "Rubik";
    line-height: 28px;
    font-weight: 400;
    margin-bottom: 25px;
}

div#faq-accordion h3 {
    margin-top: 5px;
}

div#faq-accordion {
    margin-top: 35px;
}

.owl-img-par {
    position: relative;
    overflow: hidden;
}

.owl-img-info {
    position: absolute;
    bottom: 20px;
    color: #fff;
    left: 25px;
}

.owl-img-par img {
    filter: brightness(0.8);
    transition: all 0.5s ease;
}

.owl-img-par img:hover {
    transform: scale(1.1, 1.1);
}

section#project {
    position: relative;
    margin-top: 50px;
}

.owl-carousel.owl-theme.owl-loaded.owl-drag {
    margin-top: 30px;
}


/*blog css*/

.blog-col {
    float: left;
    width: 30%;
    margin-left: 3%;
    margin-top: 45px;
    overflow: hidden;
}

.blog-col span {
    color: #696687;
    font-size: 14px;
    font-family: "Nunito";
    font-weight: 400;
    padding: 20px 0px 6px 0px;
    display: inline-block;
}

.blog-col .link-news:hover {
    color: #00aeff;
}

.blog-col .font-awsome:after {
    content: "\f178";
    font-family: "FontAwesome";
    margin-left: -14px;
    padding-left: 12px;
    transition: all 0.5s ease;
    visibility: hidden;
}

.blog-col .font-awsome:hover:after {
    visibility: visible;
    margin-left: 14px;
}

section#blog {
    margin: 50px 0px;
}

.blog-col img {

    border-radius: 5px;
    transition: all 0.3s ease-in;
}

.blog-col img:hover {
    transform: scale(1.1, 1.1);
}

/*contact*/

#contact {
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/homecontact-bg.jpg);
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    padding: 150px 0px;
    margin-top: 70px;
}

.form-par {
    border-radius: 0.355rem;
    background-image: linear-gradient(20deg, #0845a0 0%, #6aa5ff 57%);
    padding: 30px 40px;
    width: 50%;
    margin: 0 auto;
}

.form-com2 {
    border-radius: 0.35rem;
    width: 100%;
    height: 100px;
    margin: 10px 0px;
    padding: 10px 10px;
    border: none;
    resize: none;
}

.form-com {
    border-radius: 0.35rem;
    width: 100%;
    height: 40px;
    margin: 10px 0px;
    padding: 10px 10px;
    border: none;
}

.form-par h2 {
    color: #fff;
    text-align: center;
    font-size: 35px;
    font-weight: 800;
    font-family: "Nunito";
    margin-bottom: 25px;
}

input.submit-btn {

    color: #fff;
    border: none;
    background-image: linear-gradient(180deg, #DC2F02 0%, #9D0208 100%);
    padding: 14px 40px;
    margin: 20px auto 0px;
    display: block;
    cursor: pointer;
    transition: all 0.5s ease;
    border-radius: 0.5rem;
}

input.submit-btn:hover {
    background-image: linear-gradient(180deg, #9D0208 0%, #DC2F02 100%);
}

.footer-col {
    float: left;
    width: 30%;
    margin-left: 3%;
    margin-top: 45px;
}

.footer-col .fa-location-dot {
    color: #fff;
    background-color: #00aeff;
    border-radius: 50px;
    width: 60px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.footer-col2 {
    float: left;
    width: 20%;
    margin-left: 11%;
    margin-top: 45px;
}

.flc {
    padding-left: 15px;
}

.footer-col i {
    margin-bottom: 15px;
    color: #fff;
    background-color: #00aeff;
    border-radius: 50px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    cursor: pointer;
    transition: all 0.5s ease;
}

.footer-col.footer-2-col ul li:hover {
    padding-left: 5px;
}

.footer-col.footer-2-col ul {
    list-style: none;
}

p.copyright-footer {
    text-align: center;
    font-family: "Rubik";
}

hr.footer-hr {
    margin: 60px 0px 10px;
}



/* :: Header Area CSS */
.header-area {
    position: fixed;
    top: 0;
    width: 100%;
    height: auto;
    margin-top: 20px;
    left: 0;
    z-index: 300;
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
}

.header-area .navbar {
    -webkit-transition-duration: 500ms;
    transition-duration: 500ms;
    height: 55px;

}

.navbar-nav .nav-item .nav-link .name {
    position: relative;
    width: 100%;
    display: block;
    overflow: hidden;
    text-align: center;

}

.navbar-nav .nav-item .nav-link .name span {

    cursor: pointer;
    display: block;
    position: relative;
    color: #fe0707;
    font-weight: 700;
    font-size: 17px;
    line-height: 20px;
    transition: 0.2s;

}

.navbar-nav .nav-item .nav-link:hover .name span {
    color: #000;
    transition: .5s;
}


.header-area.sticky {
    background-color: white;
    margin-top: 0;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
}

.header-area.sticky .navbar {
    border: none;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
    cursor: pointer;
}

.world-catagory-area .nav-tabs .nav-item.show .nav-link {
    border: 1px solid transparent;
}

.world-catagory-area .nav-tabs .nav-item .dropdown-menu {
    margin-top: 15px;
    border-radius: 0;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);

}

.dropdown-menu1 {
    width: 30px;
}

.dichvu {
    float: left;
    margin-left: 20px;
    width: 280px;

}

.food {
    font-size: 20px;
    font-weight: 600;
    margin-left: 23px;
}

.fa-sliders::before {
    color: white;
}


/*BLOG-SINGLE*/
.header-col1 .head-blog {
    margin-top: 19px;
    display: flex;
    justify-content: center;
}

.head-dr {
    padding: 0 10px;
    color: #DC2F02;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
}

.fa-caret-right {
    display: flex;
    align-items: center;

}

.head-dr2 {
    padding: 0 10px;
    color: #fff;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    font-size: 20px;
    font-weight: 600;
    letter-spacing: 1px;
}

.news-col {
    width: 100%;
    display: flex;
}

/*MAIN SIDE(BLOG-SINGLE)*/
.news-row1 {
    padding: 20px;
    width: 70%;
    border-left: 2px solid #f1f1f1;
}

.wide-img1 {
    padding: 40px 90px;
}

.wide-h1 {
    color: #3b3663;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

/*SIDE BAR(BLOG-SINGLE)*/
.news-row2 {
    padding: 20px;
    width: 30%;
}

.wide-area {
    font-size: 18px;
    color: #000000;
    margin-bottom: 0;
    margin-right: auto;
    font-family: "Ubuntu", sans-serif;
    font-weight: 700;
    padding: 12px 3px;
    border-bottom: 2px solid #f1f1f1;
    border-left: 2px solid #f1f1f1;
}

.wide-blog {
    padding: 30px;
    border-left: 2px solid #f1f1f1;
}

.wide-item {
    display: flex;
    padding: 10px;
    position: relative;
    z-index: 1;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.wide-img2 {
    width: 20%;
}

.wide-p {
    padding-left: 10px;
}

.footer-col .footer-p {
    padding-bottom: 15px;
}

.all-footer .container {
    margin-top: 5%;
}

/* Footer */
.footer-all {
    padding-bottom: 20px;
    background-color: #A90006;
}

.container-footer {
    max-width: 1250px;
}

.container-footer {
    width: 100%;
    margin-right: auto;
    margin-left: auto
}

.footer-ct {
    color: #fff;
    margin: 20px 0;
    max-width: 100%;
    display: flex;
}

.contain-col1 {
    width: 25%;
}

.contain-col2 {
    width: 75%;
    display: flex;
    margin-left: 30px;
}

.foot-cl2 {
    width: 100%;
    padding: 40px 10px;
}

.social-icons-footer {
    display: flex;
    padding-top: 10px;
    padding-bottom: 10px;
    align-items: center;

}

.social-icons-footer h4 {
    font-size: 20px;
    color: #b1b1b1;
    margin-right: 30px;
    margin-bottom: 0;
}

.social-icons-footer i {
    color: #b7b7b7;
    font-size: 15px;
    transition: .5s;

}

.social-icons-footer i:hover {
    transform: translateY(-10px)
}

.lnk-about {
    position: relative;
    width: 250px;
    height: 60px;
    border: 2px solid #000;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.lnk-about::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0px;
    height: 100%;
    background-color: #000;
    transition: 0.5s ease-in-out;
}

.lnk-about:hover::before {
    width: 100%;
}

.lnk-about span {
    position: absolute;
    z-index: 1;
    transition: 0.3s;
    font-size: 20px;
    font-weight: 500;
    color: #000;
}

.lnk-about span:nth-child(1) {
    transition-delay: 0.4s;
}

.lnk-about:hover span:nth-child(1) {
    transform: scale(0);
    transition-delay: 0s;
}

.lnk-about span:nth-child(2) {
    transform: scale(3);
    opacity: 0;
}

.lnk-about:hover span:nth-child(2) {
    transform: scale(1);
    transition-delay: 0s;
    opacity: 1;
    z-index: 10;
    color: #fff;
}

.loc-footer {
    display: flex;
    flex-wrap: wrap;
}

.loc-footer p {
    color: white;
    display: flex;
    width: 69%;
    align-items: center;
}

.loc-footer i {
    margin: 10px;
    font-size: 20px;
}

.tel-footer {
    padding-left: 5px;
}

.email-footer,
.location-footer {
    padding-left: 9px;
}

.footer-rows p {
    color: #b7b7b7;
}

.fa-facebook-f,
.fa-tiktok,
.fa-youtube {
    margin-right: 36px;
}

.footer-rows h3 {
    margin-bottom: 25px;
    font-size: 23px;
    font-weight: 700;
}

.footer-rows p {
    font-size: 18px;
}

.footer-rows button {
    display: none;
}

/*ABOUT US(PAGE)*/
.about-text p {
    text-align: justify;
    font-size: 20px;
}

.txt-head {
    margin: 20px 0;
    text-align: center;
    color: #D00000;
    font-family: 'Fira Sans', sans-serif;
    font-weight: 600;
    font-size: 40px;
}

.img-about {
    width: 100%;
    height: 60vh;
    padding: 0 20%;
    margin: 30px 0;
}

.ul-about {
    margin: 20px 0;
}

.list-about {
    font-weight: 600;
    margin-left: 18px;
    padding: 5px 0;
    letter-spacing: 1px;
    color: #000;
    font-size: 19px;
}

/*NEWS(PAGE)*/
.banner-content {
    position: absolute;
    left: 0px;
    bottom: 0px;
    color: rgb(255, 255, 255);
    padding: 40px 60px;
}

.stretch-card {
    display: flex;
    -webkit-box-align: stretch;
    align-items: stretch;
    justify-content: stretch;
}

.stretch-card .card {
    width: 100%;
}

.grid-margin {
    margin-bottom: 2rem;
}

.img-fluid2 {
    width: 100%;
    height: 73vh;
}

.vertical-menu li {
    padding: 10px 0;
    list-style: none;
}

.vertical-menu li a {
    color: #000;
    font-size: 17px;
    font-weight: 500;
}

.vertical-menu li a:hover {
    color: #00aeff;
    transition: .3s ease-in-out;
    padding-left: 10px;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.55rem;
    margin-left: -10px;
}

.bge {
    left: 10px;
    top: 10px;
    position: absolute;
    display: inline-block;
    font-size: 75%;
    font-weight: 700;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
    padding: 0.25em 0.4em;
    border-radius: 0.25rem;
}

.rotate-img {
    overflow: hidden;
}

.rotate-img img {
    -webkit-transform: rotate(0) scale(1);
    transform: rotate(0) scale(1);
    -webkit-transition: 0.6s ease-in-out;
    transition: 0.6s ease-in-out;
}

.rotate-img:hover img {
    -webkit-transform: rotate(15deg) scale(1.4);
    transform: rotate(15deg) scale(1.4);
}

/*CONTACT*/
.nav-contact {
    margin-right: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.contact-items {
    display: flex;
}

.contact-items .contact-hov {
    border-radius: 0.5em;
    margin: 12px 30px;
    margin-bottom: 1px;
}


.contact-hov {
    position: relative;
    width: 200px;
    height: 50px;
    border: 2px solid #DC2F02;
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;

}

.contact-hov::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0px;
    height: 100%;
    background-color: #f70505;
    transition: 0.5s ease-in-out;
}

.contact-hov:hover::before {
    width: 100%;
}

.contact-hov span {
    position: absolute;
    z-index: 1;
    transition: 0.3s;
    font-size: 20px;
    font-weight: 500;
    color: #DC2F02;
}

.contact-hov span:nth-child(1) {
    transition-delay: 0.4s;
}

.contact-hov:hover span:nth-child(1) {
    transform: scale(0);
    transition-delay: 0s;
}

.contact-hov span:nth-child(2) {
    transform: scale(3);
    opacity: 0;
}

.contact-hov:hover span:nth-child(2) {
    transform: scale(1);
    transition-delay: 0s;
    opacity: 1;
    z-index: 10;
    color: #fff;
}

.contact-hov .contact-info {
    transform: scale(3);
    opacity: 0;
}

.contact-hov:hover .contact-info {
    transform: scale(1);
    opacity: 1;
    color: #fff;
}

.contact-hov:hover .contact-info .loc-contact {
    padding: 36px;
    transform: scale(1);
    opacity: 1;
    color: #fff;
}

.contact-info {
    display: grid;
    justify-items: center;
}

.form-contact {
    max-width: 900px;
    margin-left: auto;
    margin-right: auto;

}

.head-form {
    margin: 30px 0;
    width: 100%;
    text-align: center;
}

.hero-form {
    grid-gap: 0px 15px;
    display: grid;
}

.hero-form input {
    border: 1px solid #000;
}

.cont-name,
.cont-loc,
.cont-phone,
.cont-email {
    border:2px solid #A90006;
    width: 100%;
}

.cont-contect2 {
    height: 130px;
    width: 100%;
    border: 2px solid #A90006;
    padding: 10px;
    border-radius: 0.5rem;
    margin-top: 12px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}
.cont-contect {
    height: 130px;
    width: 100%;
    border: 1px solid #000;
    padding: 10px;
    border-radius: 0.5rem;
    margin-top: 12px;
    font-family: inherit;
    font-size: inherit;
    line-height: inherit
}

/*POPUP CONTACT (ALL PAGE)*/
.mod-modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(0);
    transition: 200ms ease-in-out;
    border: 1px solid black;
    border-radius: 10px;
    z-index: 10;
    background-color: white;
    width: 1150px;
    height: 98%;
    max-width: 100%;
}

.mod-modal.active {
    transform: translate(-50%, -50%) scale(1);
}

.mod-header {
    padding: 0px 57px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.mod-header .mod-title {
    color: #f90606;
    font-size: 1.25rem;
    font-weight: bold;
}

.mod-items1 {
    padding: 10px;
}

.mod-items2 {
    margin-right: 15px;
    padding: 10px;
}

.mod-items2 .mod-p {
    display: none;
}

.mod-items2 .contact-items {
    display: none;
}

.mod-header .mod-close-button {
    cursor: pointer;
    border: none;
    outline: none;
    background: none;
    font-size: 1.25rem;
    font-weight: bold;
}

.mod-body {
    display: flex;
    padding: 10px 15px;
}

.mod-img {
    width: 80%;
    height: auto;
    margin-left: 33px;
}

#overlay {
    position: fixed;
    opacity: 0;
    transition: 200ms ease-in-out;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, .5);
    pointer-events: none;
}

.mod-p {
    color: #000;
    width: 80%;
    margin-left: 33px;
    text-align: justify;
}

#overlay.active {
    opacity: 1;
    pointer-events: all;
}

/* SERVICE-INDEX */
.head-service {
    margin-top: 100px;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;

}

.head-service h3 {
    color: #D00000;
    font-size: 40px;
    font-family: 'Fira Sans', sans-serif;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 20px;
}

.head-service h2 {
    text-align: center;
    color: #6A040F;
    font-size: 30px;
    font-family: 'K2D', sans-serif;
    letter-spacing: 1px;
    margin-bottom: 20px;
    margin-top: -130px;
}

.hero-service {
    display: grid;
    width: 100%;
    grid-template-columns: 1fr 1fr 1fr;
}

.items-service {

    margin-bottom: 35px;
}

.img-service {
    margin: 0 4%;
    border-radius: 0.5em;
    width: 93%;
    height: auto;
}


.items-service h3 {
    margin: 10px 16px;
    font-size: 21px;
    font-weight: 600;
    
}

.items-service a {
    display: grid;
    color: #000;
}

.list-service {
    display: flex;
    position: relative;
    width: 100%;
    flex-direction: column;
}

.items-list-service {
    list-style: none;
    display: grid;
    grid-gap: 15px 0px;
    grid-template-columns: 1fr 1fr;
    padding-top: 20px;
}

.items-list-service li {
    margin-left: 16px;
    margin-right: 12px;

}

/* NEWS-INDEX */
.hero-news {
    display: flex;
    width: 100%;
}

.img-news {
    margin: 0 3.8%;
    border-radius: 0.5em;
    width: 93%;
    height: 60%;
}

.items-news h2 {
    margin-top: 15px;
    margin-left: 16px;
    margin-right: 12px;
    text-align: justify;
    font-size: 30px;
}

.items-news {
    width: 100%;
}

.items-news h2 a {
    color: #000;
    font-weight: 500;
}

.items-news h2 a:hover {
    color: #a40f0f;
    transition: .3s;
}

.items-news p {
    margin-top: 5px;
    margin-left: 16px;
    margin-right: 12px;
    text-align: justify;
}

/* ABOUT-US(INDEX) */
.hero-about {
    margin-top: 35px;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.items-about {
    width: 100%;
}

.items-about h3 {
    text-transform: uppercase;
    background: linear-gradient(to right, #DC2F02 0%, #6A040F 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 30px;
    letter-spacing: 1px;
}

.items-about p {
    margin-right: 165px;
    text-align: justify;
}

.contain-about {
    margin: 0 12px 0 120px;
    width: 100%;
}

.icon-about {
    margin-top: 20px;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-gap: 20px 10px;
}

.icon-about-items img {
    width: 40px;
    height: 40px;
}

.icon-about-items span {
    margin-left: 10px;

}

/* SLIDER-INDEX*/
.card22 {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #fff;
}

.card__content {
    margin: 13px;
    background: #F6F6F6;
    text-align: center;
    padding: 40px;
    height: auto;
    border-radius: 0.5em;
}

.card__title {
    display: block;
    font-size: 20px;
    font-weight: bold;
}

.card__name {
    display: block;
    font-size: 15px;
}

.card__text {
    height: 250px;
    text-align: justify;
    margin-bottom: 20px;
}

.img-testimonial {
    margin-bottom: 20px;
    border-radius: 30%;
    border: 1px solid seagreen;
    width: 30%;
}

.container-testimoni {
    display: flex;
    justify-content: center;
}

.contain-testimoni {
    margin: 20px 10px;
}

.fa-quote-left {
    margin-bottom: 10px;
    color: #6A040F;
    font-size: 60px;
    float: left;
    display: flex;
    width: 100%;

}

.swiper-button-next::after {
    font-size: 20px !important;
    background-color: #ccc;
    padding: 10px 13px 10px 16px;
    border-radius: 50px;
    color: #6A040F;
}

.swiper-button-prev::after {
    font-size: 20px !important;
    background-color: #ccc;
    padding: 10px 16px 10px 13px;
    border-radius: 50px;
    color: #6A040F;
}

/*PROJECT-INDEXT*/
.hero-project {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
}

.items-project {
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
}

.items-project img {
    margin: 40px 0 0 4%;
    border-radius: 0.5rem 0.5rem 0 0;
    width: 93%;
    height: auto;
}

.items-project h4 {
    font-size: 21px;
    margin: 10px 16px;
}

.items-project p {
    margin-left: 16px;
    margin-right: 12px;
    font-size: 15px;
}

.js-project {
    margin-left: 19px;
    display: flex;
    width: 97%;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    justify-content: center;
    border-radius: 1rem;
}

.js-project li {
    padding: 30px 65px;
    list-style: none;
}

.btn-project {
    cursor: pointer;
    background: 0;
    padding: 0;
    margin: 0;
    font-size: 20px;
    font-weight: 600;
    color: #6A040F;
}

.btn-project:hover {
    color: #9D0208;
}

.slide1 {
    display: none;
}

.active {
    display: block;
}

.items-pa {
    margin: 0 13px 10px 17px;
    border-radius: 0 0 0.5rem 0.5rem;
    box-shadow: 2px 2px 10px 0px rgba(0, 0, 0, 0.15);
}

/*Logo*/
.bfh {

    width: 200px;
    top: 0;

}

.bfg {
    position: absolute;
    width: 160px;
    top: -10px;
    left: 20px;
}

.pico {
    text-align: center;
    font-size: 40px;
    margin-top: 60px;
    color: #D00000;
    font-family: 'Fira Sans', sans-serif;
    font-weight: 600;
}

.navbar-nav .nav-item .name1 {
    position: relative;
    width: 100%;
    background-color: #fb0202;
    overflow: hidden;
    border-radius: 50px;

}

.navbar-nav .nav-item .nav-link .name2 span {
    cursor: pointer;
    display: block;
    position: relative;
    color: #fff;
    font-weight: 700;
    font-size: 17px;
    line-height: 20px;
    transition: 0.2s;

}

/*FOOTER-INFO*/
.hero-footer {
    display: flex;
    width: 100%;
    justify-content: center;
    align-items: center;
}

.items-footer1 {
    position: relative;
    display: flex;
    width: 50%;
    align-content: flex-start;
    flex-wrap: wrap;
    margin-right: 150px;
}

.items-footer1 h4{
    text-transform: uppercase;
    background: linear-gradient(to left, #DC2F02 0%, #6A040F 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 400;
    font-size: 40px;
}
.items-footer1 img{
    margin-bottom: 70px;
    width: 90%;
    opacity: 0.2;
}
.items-footer2 {
    width: 30%;
}

.footer-frm-name,
.footer-frm-email {
    margin: 5px;
    width: 32%;
    border: 1px solid #000;
}

.logo-footer {
    width: 70%;
    margin-top: 14px;
}

.bg-hero {
    margin-top: 40px;
    padding: 30px 0px;
    background-color: #fff0f3;

}

.footer-frm-submit {
    float: right;
    background-color: #A90006;
    color: #fff;
    border-radius: 0.3rem;
    transition: transform .3s ease;

}

.footer-frm-submit::after, .footer-frm-submit::before{
    content: "";
    position: absolute;
    opacity: 3;
    background-color: #000;
    width: 100%;
    height: 100%;
    left: 0;
    bottom: 0;
    z-index: -1;
    transition: .3s ease;
}

.footer-frm-submit:hover{
    transform: translate(-3px, -3px);
}

.footer-frm-submit:hover::before{
    transform: translate(3px, 3px);
}

.dropdown-content p {
    color: white;
  
}

/*PHẦN MỚI*/
#contain {
    width: 100%;
    height: 500px;
    background-color: #ede9e9;
    float: left;
    margin-bottom: 100px;
    margin-top: -60px;
}

.box2 {
    width: 900px;
    height: 400px;
    background-color: rgb(255, 255, 255);
    margin-left: 30px;
    font-size: 23px;
    color: #000;
}

.box2 h2 {
    font-weight: 500;
    font-family: 'Fira Sans', sans-serif;
}

.box1 {
    width: 600px;
    height: 400px;
    background-color: rgb(253, 253, 253);
    float: right;

}


.img-abc {
    width: 720px;
    height: 500px;
}

.tao {
    font-weight: 500;
    font-size: 30px;
    text-align: center;
    margin-top: 30px;
}

.teo {

    color: rgb(159, 14, 14);
}

.hmd {
    margin-bottom: 40px;
    font-weight: 700;
    box-shadow: inset;
    color: #7a0e0e;
}

.fa-phone {
    color: white;
}

.name9 {
    color: #f90303;
    font-size: 15px;
}

.name9:hover {
    transition: 400ms ease;
    transform: rotate(360deg);
}

#search-box {
    display: none;
    width: 300px;
    height: 65px;
    position: absolute;
    top: 49px;
    right: -80px;
    background: #fff;
    padding: 0px;
    border: 2px solid #fc0404;
    border-radius: 5px;

}

form:hover+#search-box,
#search-box:hover {
    display: block;
}

#search-box button {
    background-color: #f90505;
    color: white;
    font-weight: 500;
    cursor: pointer;
}



/* Style the modal background */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);

}


.modal-content1 {
    right: 11%;
    position: fixed;
    margin-top: 6px;
    border: 1px solid black;
    border-radius: 10px;
    z-index: 10;
    background-color: white;
    width: 77%;
    height: 98%;
    max-width: 100%;
}


.mod-header .close {
    color: #000;
    padding: 10px;
    cursor: pointer;
    font-size: 1.25rem;
    font-weight: bold;
}

/*TRANSLATE GG*/
.translator-en {
    z-index: 1000;
    right: 0;
    background: none;
    font-weight: 600;
    cursor: pointer;
    position: absolute;
}

.goog-logo-link,
.goog-te-gadget span {

    display: none !important;

}

.goog-te-gadget {

    color: transparent !important;
    font-size: 0;

}

.goog-te-combo {
    display: none !important;
}

.gg-translate {
    display: none;
    margin-top: 10px;
}

.btn-translate {
    cursor: pointer;
    background-size: cover;
    background-position: center center;
    background-blend-mode: overlay;
    background-image: url(../images/UKHeader.png);
    padding: 0px 8px;
    margin: 6px 10px;
    font-weight: 800;
    color: white;
    background-color: rgba(0, 0, 0, 0.2);
}

.skiptranslate {
    position: fixed;
    top: 1000 !important;
    right: 0;
    display: none;
}

.back-image {
    width: 5%;
    height: 10%;
}

.translate-part {
    display: flex;
    justify-content: center;
    margin-top: 5px;
    margin-left: 5px;
}

body {
    top: 0px !important;
}

.anh1 {
    background-color: #00aeff;
}

/*SWIPER*/
.swiper1 {
    overflow: hidden;
    width: 100%;
    height: 100%;
}

.swiper-slide .slider-bar {
    margin-top: 167px;
    display: block;
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.swiper-pagination-bullet-active {
    background-color: #FFBA08 !important;
}

.img-service2 {
    display: none;
}

/*video*/
.embed-responsive-item {
    width: 90%;
    height: 300px;
    margin-left: 30px;
    margin-top: 30px;
}


/*zony peanut*/

.emi {
    width: 100%;
   
    margin-top: 80px;
}

.imgzn {
    width: 100%;
}

.card-pic {
    width: 100%;
}

.ban-footer {
    margin-top: 1px;
    background-color: #A90006;
}
.ccc{
    margin-top: -100px;
}


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
      content:"";
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
  .bbb{
    margin-top: -60px;
  }
  