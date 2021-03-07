<?php
$p = "select * from teacher order by name asc";
$teacher = mysqli_query($conn, $p);
?>

<div class="content_academy_wrap">
	<div class="content_academy_inner">
		<div class="people">
			<h3>Giảng viên tại trung tâm</h3>
			<p>Đội ngũ giảng viên của chúng tôi là những người giàu kinh nghiệm, sẵn sàng chia sẻ cho học viên những kiến thức chuyên môn cần thiết cho học viên. Dưới đây là danh sách những giảng viên tại trung tâm chúng tôi!</p>
			<?php foreach ($teacher as $info) : ?>
				<p><?= $info['name'] ?></p>
				<div class="card" style="width: 18rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>