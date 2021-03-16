<?php include "../cpanel/controller/teacherquery.php" ?>

<div class="teacher">
	<?php include "../cpanel/model/successTeacherAction.php"?>
	<h3>Danh sách giảng viên</h3>
	<div class="add">
		<a href="?request=addTeacher" class="btn btn-primary">Thêm giảng viên</a>
	</div>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">ID</th>
			<th scope="col">Họ và tên giảng viên</th>
			<th scope="col">Chuyên ngành</th>
			<th scope="col">Ảnh giảng viên</th>
			<th scope="col">Thao tác</th>
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
						<td>Chưa có ảnh của giảng viên</td>
					<?php endif; ?>
					<td><a href="?request=updateTeacher&id=<?= $item['tID'] ?>" class="btn btn-primary">Sửa</a>
						<?php if (mysqli_num_rows(mysqli_query($conn, "select*from course where tID = '$item[tID]'")) == 0) : ?>
							<a onclick="return confirm('Bạn có chắc muốn xóa giảng viên này?');" href="?request=deleteTeacher&id=<?= $item['tID'] ?>" class="btn btn-danger" onclick="">Xóa<a>
								<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>