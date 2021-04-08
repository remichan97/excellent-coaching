<div class="tag_academy_row">
	<ul class="list-group">
		<?php while ($row = mysqli_fetch_assoc($c)) : ?>
			<?php $catID = $row['catID']; ?>
			<?php $category = $row['catName'] ?>
			<li class="list-group-item large"><a id="scroll_bnt" class="row_text"><?= $category ?></a>
			<?php $sqc = "select * from course where status and catID= $catID" ?>
			<?php $sc = mysqli_query($conn, $sqc) ?>
				<div id="scroll_down" class="list-group sub-item">
					<?php foreach ($sc as $i) : ?>
						<div class="list-group-item"><span><a class="text_area" href="./courses?courseID=<?= $i['cID'] ?>"><?= $i['cName'] ?></a></span></div>
					<?php endforeach; ?>
				</div>
			</li>
		<?php endwhile; ?>
		<li class="list-group-item large"><a href="../pricelist" class="row_text">Price list of our course</a></li>
	</ul>
</div>
<script>src="https://code.jquery.com/jquery-3.6.0.js"</script>
<script type="text/javascript"></script>
<script>
	$(document).ready(function(){
		$('#scroll_bnt').on('click',function(){
			$('#scroll_down'),toggle(3000);
		});
	});
</script>