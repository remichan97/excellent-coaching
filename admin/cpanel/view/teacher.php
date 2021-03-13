<?php include "../cpanel/controller/teacherquery.php" ?>

<div class="teacher">
	<?php if(isset($_SESSION['added']) && $_SESSION['added'] == true):?>
		<div class="alert alert-success">Đã thêm thông tin giảng viên</div>
		<?php unset($_SESSION['added'])?>
		<?php elseif(isset($_SESSION['completed']) && $_SESSION['completed'] == true):?>
			<div class="alert alert-success">Đã xóa thông tin giảng viên</div>
			<?php unset($_SESSION['completed'])?>
			<?php elseif(isset($_SESSION['updated']) && $_SESSION['updated'] == true):?>
				<div class="alert alert-success">Cập nhật thông tin giảng viên thành công</div>
				<?php unset($_SESSION['updated'])?>
	<?php endif;?>
	<h3>Danh sách giảng viên</h3>
	<div class="add">
			<a href="?request=addTeacher" class="btn btn-primary">Thêm giảng viên</a>
	</div>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">ID</th>
			<th scope="col">Họ và tên giảng viên</th>
			<th scope="col">Ảnh giảng viên</th>
			<th scope="col">Thao tác</th>
		</thead>
		<tbody>
			<?php foreach ($query as $item) : ?>
				<tr>
					<th scope="row"><?= $item['id'] ?></th>
					<td><?= $item['name'] ?></td>
					<?php if ($item['photo']) : ?>
						<td class="image"><img src="../assets/img/<?= $item['photo'] ?>" alt="Ảnh giảng viên <?= $item['name'] ?>"></td>
					<?php else : ?>
						<td>Chưa có ảnh của giảng viên</td>
					<?php endif; ?>
					<td><a href="?request=updateTeacher&id=<?= $item['id'] ?>" class="btn btn-primary">Sửa</a>
						<?php if(mysqli_num_rows(mysqli_query($conn,"select*from course where teacher = '$item[id]'")) == 0):?>
							<a onclick="return confirm('Bạn có chắc muốn xóa giảng viên này?');" href="?request=deleteTeacher&id=<?=$item['id']?>" class="btn btn-danger" onclick="">Xóa<a>
						<?php endif;?>
				</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>