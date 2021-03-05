<?php include "./controller/showinfo.php" ?>

<div class="content_academy_wrap">
	<div class="content_academy_inner">
		<div class="courseInfo">
			<h3><?= $d['cName'] ?></h3>
			<?php include "./view/courseIaN.php" ?>
			<div class="courseInfo">
				<?= $d['description'] ?>
			</div>
			<?php include "./view/registerform.php" ?>
		</div>
	</div>
</div>