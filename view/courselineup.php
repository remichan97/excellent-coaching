<div class="tag_academy_row">
	<ul class="list-group">
		<?php while ($row = mysqli_fetch_assoc($c)) : ?>
			<?php $catID = $row['catID']; ?>
			<?php $category = $row['catName'] ?>
			<li class="list-group-item large"><a href="#" class="row_text"><?= $category?></a></li>
			<?php $sqc = "select * from course where status and catID= $catID" ?>
			<?php $sc = mysqli_query($conn, $sqc) ?>
			<ul class="list-group sub-item">
				<?php foreach ($sc as $i) : ?>
				<li class="list-group-item"><span><a href="./courses?courseID=<?= $i['cID']?>"><?= $i['cName'] ?></a></span></li>
			<?php endforeach; ?>
			</ul>
		<?php endwhile; ?>
	</ul>
</div>