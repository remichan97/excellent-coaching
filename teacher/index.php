<?php include "../controller/teacherquery.php"?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Hệ thống giảng viên - Excellent Coaching Vietnam</title>
	<link rel="stylesheet" href="../assets/teacher/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/teacher/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/teacher/css/Footer-Basic.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
	<link rel="stylesheet" href="../assets/css/logo_tag1.css">
</head>

<body>
	<section class="site_wrap">
		<?php include "../layout/header.php" ?>
		<div class="content_academy_wrap">
			<div class="content_academy_inner">
				<section class="header_title">
					<h1>Hệ thống giảng viên của Excellent Coaching Vietnam</h1>
				</section>
				<?php include "../view/teacherView.php"?>
			</div>
		</div>
		<?php include "../layout/footer.php" ?>
	</section>
	<script src="../assets/teacher/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/teacher/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>