<?php
include "../cpanel/model/database.php";
$f = "select*from feedback";
$fb = mysqli_query($conn, $f);
?>

<div class="feedback">
	<h3>Customer Messages</h3>
	<?php if (isset($_SESSION['sent']) && $_SESSION['sent'] == true) : //thông báo thành công cho người dùng
	?>
		<div class="alert alert-success">Your response has been sent!</div>
		<?php unset($_SESSION['sent']) //và sau đó quên luôn là nó đã từng xảy ra
		?>
		<?php elseif(isset($_SESSION['feedbackDeleted']) && $_SESSION['feedbackDeleted'] == true):?>
		<div class="alert alert-success">Deleted message!</div>
		<?php unset($_SESSION['feedbackDeleted']) //và sau đó quên luôn là nó đã từng xảy ra
		?>
	<?php endif; ?>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Email</th>
				<th scope="col">Date sent</th>
				<th scope="col">Subject</th>
				<th scope="col">Messageg</th>
				<th scopr="col">Status</th>
				<th scope="col">Response</th>
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
						<td>Not responded</td>
					<?php else : ?>
						<td>Responded</td>
					<?php endif; ?>
					<?php if ($item['response'] == 0) : ?>
						<td><a href="?request=reply&id=<?= $item['id'] ?>" class="btn btn-primary">Reply</a>
							<a href="?request=deleteFeedback&feedbackid=<?= $item['id'] ?>" onclick="return confirm('Do you want to delete this message?')" class="btn btn-danger">Delete</a>
						</td>
					<?php else : ?>
						<td> <a href="?request=deleteFeedback&feedbackid=<?= $item['id'] ?>" onclick="return confirm('Do you want to delete this message?')" class="btn btn-danger">Delete</a></td>
					<?php endif; ?>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>