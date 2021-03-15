<?php
if (isset($_GET['teacherid'])) {
	include "../model/database.php";
	$id = $_GET['teacherid'];
	$detail = "select*from teacher where id = '$id'";
	$teacherdetail = mysqli_query($conn, $detail);
	$td = mysqli_fetch_array($teacherdetail);
	$otherteacher = "select*from teacher where id not like '$id'";
	$other = mysqli_query($conn, $otherteacher);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Thông tin giảng viên - Excellent Coaching Vietnam</title>
	<link rel="stylesheet" href="../assets/teacher/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/teacher/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/teacher/css/description.css">
	<link rel="stylesheet" href="../assets/teacher/css/Footer-Basic.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="../assets/css/logo_tag1.css">
</head>

<body>
	<section class="site_wrap">
		<?php include "../layout/header.php" ?>
		<section class="content_academy_wrap">
			<div class="content_academy_inner top">
				<header class="title_form">
					<div class="col_9 layer">
						<h1>Giảng viên <?=$td['name']?></h1>
					</div>
					<section class="description_form">
						<div class="col_9">
							<?=$td['description']?>
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
				<?php include "../view/otherTeacherView.php"?>
			</div>
		</div>
		<?php include "../layout/footer.php" ?>
	</section>
	<script src="../assets/teacher/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/teacher/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>