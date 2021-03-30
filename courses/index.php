<?php session_start() ?>
<?php include "../model/database.php" ?>
<?php include "../controller/showinfo.php" ?>
<?php include "../controller/courseregister.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?= $d['cName'] ?> - Excellent Coaching</title>
	<link rel="stylesheet" href="../assets/subsite/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/subsite/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/subsite/css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="../assets/subsite/css/Footer-Basic.css">
	<link rel="stylesheet" href="../assets/subsite/css/logo_tag1.css">
	<link rel="stylesheet" href="../assets/subsite/css/styles.css">
</head>

<body>
	<section class="site_wrap">
		<?php include "../layout/header.php" ?>
		</div>
		<section class="content_academy_wrap">
			<div class="content_academy_inner">
				<div class="status">
					<?php include "../view/registerstatus.php" ?>
				</div>
				<header class="title_form">
					<div class="col_9 layer">
						<h1><?= $d['cName'] ?></h1>
					</div>
					<div class="col_3">
						<h4>Teacher: <?=$d['name']?></h4>
					</div>
					<section class="description_form">
						<div class="col_9">
							<?=$d['description']?>
						</div>
						<div class="col_3">
							<div class="list_lecturers">
								<ul class="top_list">
									<li>Course duration: <?= $d['duration'] ?> month</li>
									<li>Course fee: <?= number_format($d['price'], 0, ',', '.') ?> VND</li>
									<button onclick="window.print()" class="btn btn-primary" style="margin-top: 2rem;">Save this page</button>
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
					<?php include "../view/registerform.php" ?>
				</section>
			</div>
			<?php include "../layout/footer.php" ?>
		</section>
	</section>
	<script src="../assets/subsite/bootstrap/js/bootstrap.min.js"></script>
	<script src="../assets/subsite/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>