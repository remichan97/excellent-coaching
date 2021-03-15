<?php 
	if (isset($_GET['teacherid'])) {
		include "../model/database.php";
		$id = $_GET['teacherid'];
		$detail = "select*from teacher where id = '$id'";
		$teacherdetail = mysqli_query($conn,$detail);
		$td = mysqli_fetch_array($teacherdetail);
		$otherteacher = "select*from teacher where id not like ''$id";
		$other = mysqli_query($conn,$otherteacher);
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>gv</title>
    <link rel="stylesheet" href="../assets/teacher/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/teacher/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../assets/teacher/css/description.css">
    <link rel="stylesheet" href="../assets/teacher/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"> -->
    <link rel="stylesheet" href="../assets/css/logo_tag1.css">
</head>

<body>
    <section class="site_wrap">
		<?php include "../layout/header.php"?>
        <section class="content_academy_wrap">
            <div class="content_academy_inner top">
                <header class="title_form">
                    <div class="col_9 layer">
                        <h1>Heading</h1>
                        <p>Paragraph</p>
                    </div>
                    <div class="col_3">
                        <h4>php, html5, css3, SQL server, Xml, ......................</h4>
                    </div>
                    <section class="description_form">
                        <div class="col_9">
                            <p>It's not only writers who can benefit from this free online tool. If you're a programmer who's working on a project where blocks of text are needed, this tool can be a great way to get that. It's a good way to test your programming and that the tool being created is working well.<br></p>
                            <p>Slave spirituals often had hidden double meanings. On one level, spirituals referenced heaven, Jesus, and the soul, but on another level, the songs spoke about slave resistance. For example, according to Frederick Douglass, the song “O Canaan, Sweet Canaan” spoke of slaves’ longing for heaven, but it also expressed their desire to escape to the North. Careful listeners heard this second meaning in the following lyrics: “I don’t expect to stay / Much longer here. / Run to Jesus, shun the danger. / I don’t expect to stay.” When slaves sang this song, they could have been speaking of their departure from this life and their arrival in heaven; however, they also could have been describing their plans to leave the South and run, not to Jesus, but to the North. Slaves even used songs like “Steal Away to Jesus (at midnight)” to announce to other slaves the time and place of secret, forbidden meetings. What whites heard as merely spiritual songs, slaves discerned as detailed messages. The hidden meanings in spirituals allowed slaves to sing what they could not say.<br></p>
                            <ul>
                                <li>Thành tựu</li>
                                <li>Học viên&nbsp;</li>
                                <li>Giảng viên</li>
                                <li>v.v</li>
                            </ul>
                        </div>
                        <div class="col_3 layer">
                            <div class="list_lecturers">
                                <ul class="top_list">
                                    <li>Thành tựu</li>
                                    <li>Item 2</li>
                                    <li>Item 3</li>
                                    <li>Item 4</li>
                                </ul>
                            </div>
                        </div>
                    </section>
                </header>
            </div>
        </section>
        <div class="content_academy_wrap">
            <div class="content_academy_inner">
                <section class="header_title">
                    <h1>Các giảng viên khác của EC</h1>
                </section>
                <section class="group_card">
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                    <div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="#"><img>
                            <div class="info_form">
                                <h4>Đặng Trần Long</h4>
                                <p>html5, css3, c/c++, php, js...</p>
                            </div>
                        </a></div>
                </section>
            </div>
        </div>
		<?php include "../layout/footer.php"?>
    </section>
    <script src="../assets/teacher/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/teacher/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>