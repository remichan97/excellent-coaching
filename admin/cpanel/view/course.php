<?php include "../cpanel/controller/coursequery.php" ?>

<div class="course">
<?php include "../cpanel/model/successCourseAction.php"?>
	<h3>Danh sách khóa học</h3>
	<div class="add">
		<a href="?request=addCourse" class="btn btn-primary">Thêm khóa học</a>
	</div>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">Mã khóa học</th>
			<th scope="col">Tên khóa học</th>
			<th scope="col">Danh mục khóa học</th>
			<th scope="col">Giảng viên</th>
			<th scope="col">Học phí &#40;VND&#41;</th>
			<th scope="col">Thời lượng khóa học &#40;tháng&#41;</th>
			<th scope="col">Hiển thị ngoài trang chủ</th>
			<th scope="col">Thao tác</th>
		</thead>
		<tbody>
			<?php foreach ($lineup as $item) : ?>
				<tr>
					<th scope="row"><?= $item['cID'] ?></th>
					<td><?= $item['cName'] ?></td>
					<td><?= $item['catName'] ?></td>
					<td><?= $item['name'] ?></td>
					<td><?= number_format($item['price'], '0', ',', '.') ?></td>
					<td><?= $item['duration'] ?></td>
					<?php if ($item['status'] == 1) : ?>
						<td>Có</td>
					<?php else : ?>
						<td>Không</td>
					<?php endif; ?>
					<td><a href="?request=editCourse&id=<?= $item['cID'] ?>" class="btn btn-primary">Sửa</a>
						<?php if (mysqli_num_rows(mysqli_query($conn, "select*from register where cID = '$item[cID]'")) == 0) : ?>
							<a href="?request=deleteCourse&id=<?= $item['cID'] ?>" onclick="return confirm('Bạn có chắc muốn xóa khóa học này?')" class="btn btn-danger">Xóa</a>
						<?php endif; ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>