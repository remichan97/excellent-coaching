<?php include "../cpanel/controller/apquery.php"?>

<?php if(isset($_SESSION['invited']) && $_SESSION['invited'] == true):?>
	<div class="alert alert-success">Đã gửi lịch hẹn cho học viên thành công!</div>
	<?php unset($_SESSION['invited'])?>
	<?php elseif(isset($_SESSION['changed']) && $_SESSION['changed'] == true):?>
	<div class="alert alert-success">Đã thay đổi lịch hẹn cho học viên thành công!</div>
	<?php unset($_SESSION['changed'])?>
<?php endif;?>
<div class="appointment">
	<h3>Đặt lịch hẹn cho học viên</h3>
	<table class="table table-bordered">
		<thead class="thead-light">
			<tr>
				<th scope="col">Mã đăng ký</th>
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
						<td><?=$item['address']?></td>
						<td><?=$item['ref']?></td>
						<td><?=date_format(date_create($item['regDate']),"d/m/Y")?></td>
						<?php if($item['date'] == "0000-00-00 00:00:00"):?>
							<td>Chưa đặt lịch hẹn</td>
							<?php else:?>
							<td><?=date_format(date_create($item['date']),"d/m/Y")?></td>
						<?php endif;?>
						<?php if($item['date'] == "0000-00-00"):?>
							<td><a href="?request=setAppoint&id=<?=$item['id']?>" class="btn btn-primary">Đặt lịch hẹn</a></td>
							<?php elseif(strtotime($item['date']) === strtotime(date("Y-m-d"))):?>
								<td>&nbsp;</td>
							<?php else:?>
							<td><a href="?request=changeAppoint&id=<?=$item['id']?>" class="btn btn-primary">Thay đổi lịch hẹn</a></td>
						<?php endif;?>
					</tr>
				<?php endforeach;?>
			</tbody>
		</thead>
	</table>
</div>