<?php include "../cpanel/controller/categoryList.php" ?>

<div class="category">
	<?php include "../cpanel/model/notificationCategory.php"?>
	<h3>Quản lý danh mục khóa học</h3>
	<?php include "../cpanel/controller/addCategory.php" ?>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">Mã danh mục</th>
			<th scope="col">Tên danh mục</th>
			<th scope="col">Thao tác</th>
		</thead>
		<tbody>
			<?php foreach ($rs as $item) : ?>
				<tr>
					<th scope="row"><?= $item['catID'] ?></th>
					<td><?= $item['catName'] ?></td>
					<td style="text-align: center;">
						<a href="?request=editCategory&id=<?=$item['catID']?>" class="btn btn-primary">Sửa</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>