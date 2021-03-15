<?php
include "../model/database.php";
$sql = "select catName, cName, name, duration, price from course a join teacher b on a.teacher = b.id join category c on a.catID=c.catID";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Bảng học phí - Excellent Coaching Vietnam</title>
	<link rel="stylesheet" href="../assets/subsite/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/subsite/fonts/ionicons.min.css">
	<link rel="stylesheet" href="../assets/subsite/css/Contact-Form-Clean.css">
	<link rel="stylesheet" href="../assets/subsite/css/Footer-Basic.css">
	<link rel="stylesheet" href="../assets/subsite/css/logo_tag1.css">
	<link rel="stylesheet" href="../assets/subsite/css/styles.css">
</head>

<body>
	<?php include "../layout/header.php" ?>
	<section class="content_academy_wrap">
		<div class="content_academy_inner">
			<header class="title_form">
				<div class="title">
					<h2>Học phí của các khóa học tại Excellent Coaching Vietnam</h2>
				</div>
				<section class="description_form">
					<div class="col_9">
						<p>Dưới đây là bảng học phí của các khóa học tại hệ thống Excellent Coaching Vietnam</p>
						<table class="table table-bordered">
							<thead class="thead thead-light">
								<th scope="col">Danh mục</th>
								<th scope="col">Tên khóa học</th>
								<th scope="col">Tên giảng viên</th>
								<th scope="col">Thời lượng khóa học &#40;tháng&#41;</th>
								<th scope="col">Học phí &#40;VND&#41;</th>
							</thead>
							<tbody>
								<?php foreach ($query as $item):?>
									<tr>
									<td><?=$item['catName']?></td>
									<td><?=$item['cName']?></td>
									<td><?=$item['name']?></td>
									<td><?=$item['duration']?></td>
									<td><?=number_format($item['price'],'0',',','.')?></td>
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
						<p>Bạn có thể nhấn nút dưới đây để in thông tin này, hoặc lưu thông tin này thành file pdf:</p>
						<button onclick="window.print()" class="btn btn-primary">Lưu thông tin</button>
					</div>
				</section>
			</header>
		</div>
	</section>
	<section class="content_empty_wrap">
		<?php include "../layout/footer.php" ?>
	</section>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/bs-init.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</body>

</html>