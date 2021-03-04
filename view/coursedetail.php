<?php if (isset($_GET['courseID'])) : ?>
	<?php
	$id = $_GET['courseID'];
	$des = "select name,cName,price,a.description from course a join teacher b on a.teacher = b.id where cID='$id'";
	$detail = mysqli_query($conn, $des);
	$d = mysqli_fetch_array($detail)
	?>
<?php endif; ?>

<section class="site-wrapper">
	<header class="main_header">
		<div class="inner_header">
			<div class="top_nav">
				<div class="logo"><a data-aos="fade-up" data-aos-duration="250" data-aos-once="true" href="#">LOGO</a></div>
			</div>
		</div>
	</header>
	<div class="description">
		<?=$d['description']?>
	</div>
</section>