<?php
include "../cpanel/model/database.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select id,name,email,cName,addID,ref,regDate,date from register a join course b on a.cID = b.cID where id = " . $id;
	$q = mysqli_query($conn, $sql);
	$q = mysqli_fetch_array($q);
}
?>

<?php include "../cpanel/controller/sendappointment.php" ?>
<?php if(isset($_SESSION['notinvited']) && $_SESSION['notinvited'] == true):?>
	<p class="alert alert-danger">Không thể gửi thông tin cho học viên vào lúc này, vui lòng thử lại sau</p>
	<?php unset($_SESSION['notinvited'])?>
	<?php elseif(isset($_SESSION['dup']) && $_SESSION['dup'] == true):?>
	<p class="alert alert-danger">Thời gian thay thế trùng với thời gian ban đầu</p>
	<?php unset($_SESSION['dup'])?>
	<?php elseif(isset($_SESSION['past']) && $_SESSION['past'] == true):?>
	<p class="alert alert-danger">Không thể đặt lịch hẹn trước ngày học viên đăng ký</p>
	<?php unset($_SESSION['past'])?>
<?php endif;?>
<div class="appointment">
	<h3>Đặt lịch hẹn</h3>
	<p>Tên học viên: <?= $q['name'] ?></p>
	<p>Khóa học đăng ký: <?= $q['cName'] ?></p>
	<?php if ($q['date'] == "0000-00-00") : ?>
		<p>Học viên hiện chưa được đặt lịch hẹn đến trung tâm</p>
		<p>Nhập thời gian hẹn học viên đến trung tâm ở ô phía dưới, học viên sẽ nhận một email thông báo về thời gian họ cần đến trung tâm để hoàn tất hồ sơ</p>
		<form method="post" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<input type="date" name="date" class="form-control" required>
			</div>
			<button type="submit" name='set' class="btn btn-primary mb-2">Đặt lịch</button> 
			<a href="?request=appointment" class="btn btn-light mb-2">Trở về</a>
		</form>
	<?php else : ?>
		<p>Học viên hiện đã được đặt lịch hẹn đến trung tâm vào ngày <?= date('d', strtotime($q['date'])) ?> tháng <?= date('m', strtotime($q['date'])) ?> năm <?= date('Y', strtotime($q['date'])) ?></p>
		<p>Nhập thời gian thay đổi lịch hẹn học viên đến trung tâm ở ô phía dưới, học viên sẽ nhận một email thông báo về việc thay đổi thời gian họ cần đến trung tâm để hoàn tất hồ sơ</p>
		<form method="post" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<input type="date" name="date" class="form-control" required>
			</div>
			<button type="submit" name='change' class="btn btn-primary mb-2">Thay đổi lịch</button>
			<a href="?request=appointment" class="btn btn-light mb-2">Trở về</a>
		</form>
	<?php endif; ?>
</div>