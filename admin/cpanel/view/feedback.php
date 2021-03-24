<?php
include "../cpanel/model/database.php";
$f = "select*from feedback";
$fb = mysqli_query($conn, $f);
?>

<div class="feedback">
	<h3>Phản hồi khách hàng</h3>
	<?php if (isset($_SESSION['sent']) && $_SESSION['sent'] == true) : //thông báo thành công cho người dùng
	?>
		<div class="alert alert-success">Phản hồi của bạn đã được gửi thành công!</div>
		<?php unset($_SESSION['sent']) //và sau đó quên luôn là nó đã từng xảy ra
		?>
		<?php elseif(isset($_SESSION['feedbackDeleted']) && $_SESSION['feedbackDeleted'] == true):?>
		<div class="alert alert-success">Đã xóa phản hồi!</div>
		<?php unset($_SESSION['feedbackDeleted']) //và sau đó quên luôn là nó đã từng xảy ra
		?>
	<?php endif; ?>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">STT</th>
				<th scope="col">Email</th>
				<th scope="col">Ngày gửi</th>
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
					<td><?= date_format(date_create($item['feedbackDate']),"d/m/Y") ?></td>
					<td><?= $item['subject'] ?></td>
					<td><?= $item['body'] ?></td>
					<?php if ($item['response'] == 0) : ?>
						<td>Chưa phản hồi</td>
					<?php else : ?>
						<td>Đã phản hồi khách hàng</td>
					<?php endif; ?>
					<?php if ($item['response'] == 0) : ?>
						<td><a href="?request=reply&id=<?= $item['id'] ?>" class="btn btn-primary">Trả lời</a>
							<a href="?request=deleteFeedback&feedbackid=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa phản hồi này?')" class="btn btn-danger">Xóa</a>
						</td>
					<?php else : ?>
						<td> <a href="?request=deleteFeedback&feedbackid=<?= $item['id'] ?>" onclick="return confirm('Bạn có chắc muốn xóa phản hồi này?')" class="btn btn-danger">Xóa</a></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>