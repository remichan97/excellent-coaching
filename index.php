<?php
	include "./model/database.php";
	$c = mysqli_query($conn,"select distinct a.catID, catName from course a join category b on a.catID = b.catID");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>index fixed</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/project-1.css">
    <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
</head>

<body class="home">
    <section class="site-wrapper">
        <header class="main_header">
            <div class="inner_header">
                <div class="top_nav">
                    <div class="logo"><a data-aos="fade-up" data-aos-duration="250" data-aos-once="true" href="#">LOGO</a></div>
                </div>
            </div>
        </header>
        <div class="content_academy_wrap">
            <div class="content_academy_inner">
                <div class="search_form">
                    <div class="row_title col">
                        <h3>Chào mừng đến với Excellent Coaching Vietnam</h3>
                        <p>Chúng tôi cung cấp những khóa học thuộc nhiều lĩnh vực khác nhau. Dưới đây là những khóa học mà chúng tôi hiện đang đào tạo&nbsp;<br></p>
                    </div>
                    <div class="row_search col"><input type="search" placeholder="Search"><button class="btn btn-primary search_button" type="button"><i class="fa fa-search search_icon"></i></button></div>
                </div>
					<?php include "./view/courselineup.php"?>
                <div>
                    <section class="contact-clean">
                        <form method="post">
                            <h2 class="text-center">Contact us</h2>
                            <div class="form-group"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                            <div class="form-group"><input class="form-control is-invalid" type="email" name="email" placeholder="Email"><small class="form-text text-danger">Please enter a correct email address.</small></div>
                            <div class="form-group"><textarea class="form-control" name="message" placeholder="Message" rows="14"></textarea></div>
                            <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
        <div class="page_background_video">
            <div class="color-overlay"></div><video class="background_video" preload="auto" autoplay="" loop="" muted="">
                <source src="./assets/vbg2.mp4" type="video/mp4">
            </video>
        </div>
        <footer class="footer-basic">
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2017</p>
        </footer>
    </section>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>