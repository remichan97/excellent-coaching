<?php
include "../cpanel/model/database.php";
$f = "select*from feedback";
$fb = mysqli_query($conn, $f);

?>

<div class="feedback">
	<h3>Phản hồi khách hàng</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">STT</th>
				<th scope="col">Email</th>
				<th scope="col">Tiêu đề</th>
				<th scope="col">Nội dung</th>
				<th scopr="col">Trạng thái</th>
				<th scope="col">Phản hồi</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($fb as $item) : ?>
				<tr>
					<th scope="row"><?= $item['id'] ?></th>
					<td><?= $item['email'] ?></td>
					<td><?= $item['subject'] ?></td>
					<td><?= $item['body']?></td>
					<?php if($item['response'] == 0):?>
						<td>Chưa phản hồi</td>
						<?php else:?>
						<td>Đã phản hồi khách hàng</td>
					<?php endif;?>
					<?php if($item['response'] == 0):?>
						<td><a href="?request=reply&id=<?=$item['id']?>" class="btn btn-primary">Trả lời</a></td>
						<?php else:?>
						<td></td>
					<?php endif;?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>