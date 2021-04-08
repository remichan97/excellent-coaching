<?php
include "../model/database.php";
$sql = "select catName, cName, name, duration, price from course a join teacher b on a.tID = b.tID join category c on a.catID=c.catID";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title>Price list - Excellent Coaching</title>
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
					<h2>Price list of our courses at Excellent Coaching</h2>
				</div>
				<section class="description_form">
					<div class="col_9">
						<p>Below are the list of our currently opening courses, as well as their price and other information about the course</p>
						<table class="table table-bordered">
							<thead class="thead thead-light">
								<th scope="col">Category</th>
								<th scope="col">Course Name</th>
								<th scope="col">Teacher name</th>
								<th scope="col">Course duration &#40;month&#41;</th>
								<th scope="col">Course fee &#40;VND&#41;</th>
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
						<p>To print out a copy of the above listing, or to save it as a file on your device, please click the button below:</p>
						<button onclick="window.print()" class="btn btn-primary">Save this page</button>
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