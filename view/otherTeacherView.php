<section class="group_card">
	<?php foreach ($other as $item) : ?>
		<div data-bss-hover-animate="pulse" class="card_wrap"><a class="full_card_link" href="../teacherdetail?teacherid=<?=$item['id']?>"><img src="../admin/assets/img/<?=$item['photo']?>">
				<div class="info_form">
					<h4><?=$item['name']?></h4>
				</div>
			</a></div>
	<?php endforeach; ?>
</section>