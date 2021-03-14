<?php include "../cpanel/controller/coursequery.php"?>

<div class="course">
	<h3>Quản lý khóa học</h3>
	<table class="table table-bordered">
		<thead class="thead thead-light">
			<th scope="col">Mã khóa học</th>
			<th scope="col">Tên khóa học</th>
			<th scope="col">Hiển thị ngoài trang chủ</th>
			<th scope="col">Thời lượng khóa học &#40;tháng&#41;</th>
			<th scope="col">Thao tác</th>
		</thead>
		<tbody>
			<?php foreach($lineup as $item):?>
			<?php endforeach;?>
		</tbody>
	</table>
</div>