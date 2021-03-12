<?php
include "../cpanel/model/database.php";
$a = "select id,name,email,cName,addID,ref,regDate,date from register a join course b on a.cID = b.cID";
$ap = mysqli_query($conn, $a);
?>

<div class="appointment">
	<h3>Đặt lịch hẹn cho học viên</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">STT</th>
				<th scope="col">Họ và tên</th>
				<th scope="col">Email</th>
				<th scope="col">Khóa học đăng ký</th>
				<th scope="col">Cơ sở đăng ký</th>
				<th scope="col">Kênh truyền thông</th>
				<th scope="col">Ngày đăng ký</th>
				<th scope="col">Lịch hẹn</th>
				<th scope="col">Thao tác</th>
			</tr>
			<tbody>
				<?php foreach($ap as $item):?>
					<tr>
						<th scope="row"><?=$item['id']?></th>
						<td><?=$item['name']?></td>
						<td><?=$item['email']?></td>
						<td><?=$item['cName']?></td>
						<td><?=$item['addID']?></td>
						<td><?=$item['ref']?></td>
						<td><?=$item['regDate']?></td>
						<?php if($item['date'] == "0000-00-00 00:00:00"):?>
							<td>Chưa đặt lịch hẹn</td>
						<?php endif;?>
						<td><a href="?request=setAppoint" class="btn btn-primary">Đặt lịch hẹn</a></td>
					</tr>
				<?php endforeach;?>
			</tbody>
		</thead>
	</table>
</div>