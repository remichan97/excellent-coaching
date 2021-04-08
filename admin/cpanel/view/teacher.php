<?php include "../cpanel/controller/teacherquery.php" ?>

<div class="teacher">
	<?php include "../cpanel/model/successTeacherAction.php"?>
	<h3>Teacher list</h3>
	<div class="add">
		<a href="?request=addTeacher" class="btn btn-primary">Add new teacher</a>
	</div>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">ID</th>
			<th scope="col">Name</th>
			<th scope="col">Best Field</th>
			<th scope="col">Image</th>
			<th scope="col">Action</th>
		</thead>
		<tbody>
			<?php foreach ($query as $item) : ?>
				<tr>
					<th scope="row"><?= $item['tID'] ?></th>
					<td><?= $item['name'] ?></td>
					<td><?=$item['profession']?></td>
					<?php if ($item['photo']) : ?>
						<td class="image"><img src="../assets/img/<?= $item['photo'] ?>" alt="Ảnh giảng viên <?= $item['name'] ?>"></td>
					<?php else : ?>
						<td>No photo</td>
					<?php endif; ?>
					<td><a href="?request=updateTeacher&id=<?= $item['tID'] ?>" class="btn btn-primary">Edit</a>
						<?php if (mysqli_num_rows(mysqli_query($conn, "select*from course where tID = '$item[tID]'")) == 0) : ?>
							<a onclick="return confirm('Would you like to delete this teacher?');" href="?request=deleteTeacher&id=<?= $item['tID'] ?>" class="btn btn-danger" onclick="">Delete<a>
								<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>