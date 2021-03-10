<?php include "../model/database.php"?>
<?php include "../controller/showinfo.php" ?>
<?php include "../view/registerstatus.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>site</title>
	<link rel="stylesheet" href="../assets/subsite/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/subsite/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/subsite/css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="../assets/subsite/css/Footer-Basic.css">
	<link rel="stylesheet" href="../assets/subsite/css/logo_tag1.css">
	<link rel="stylesheet" href="../assets/subsite/css/styles.css">
</head>

<body>
	<?php include "../layout/header.php"?>
	</div>
	<section class="content_academy_wrap">
		<div class="content_academy_inner">
			<header class="title_form">
				<div class="col_9 layer">
					<h1><?=$d['cName']?></h1>
				</div>
				<div class="col_3">
					<h4>Thông tin khóa học</h4>
				</div>
				<section class="description_form">
					<div class="col_9">
						<?=$d['description']?>
					</div>
					<div class="col_3">
						<div class="list_lecturers">
							<ul class="top_list">
								<li>Giảng viên: <?=$d['name']?></li>
								<li>Thời lượng khóa học: <?=$d['duration']?> tháng</li>
								<li>Học phí: </li>
								<li>Item 4</li>
							</ul>
						</div>
					</div>
				</section>
			</header>
		</div>
	</section>
	<section class="content_empty_wrap">
		<div class="content_academy_inner">
			<section class="contact-clean">
				<?php include "../view/registerform.php"?>
			</section>
		</div>
		<?php include "../layout/footer.php" ?>
	</section>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>