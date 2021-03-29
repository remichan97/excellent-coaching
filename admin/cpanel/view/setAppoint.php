<?php
include "../cpanel/model/database.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select id,name,email,cName,address,ref,regDate,date from register a join course b on a.cID = b.cID join address c on a.addID = c.addID where id = " . $id;
	$q = mysqli_query($conn, $sql);
	$q = mysqli_fetch_array($q);
}
?>

<?php include "../cpanel/controller/sendappointment.php" ?>
	<?php include "../cpanel/model/errorAppointment.php"?>
<div class="appointment">
	<h3>Set a Schedule</h3>
	<p>Student name: <?= $q['name'] ?></p>
	<p>Registered course: <?= $q['cName'] ?></p>
	<?php if ($q['date'] == "0000-00-00") : ?>
		<p>No schedule set for this registration</p>
		<p>Enter a date below, students will receive an email inform them about the day they need to come to the centre</p>
		<form method="post" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<input type="date" name="date" class="form-control" required>
			</div>
			<button type="submit" name='set' class="btn btn-primary mb-2">Set</button> 
			<a href="?request=appointment" class="btn btn-light mb-2">Go back</a>
		</form>
	<?php else : ?>
		<p>Học viên hiện đã được đặt lịch hẹn đến trung tâm vào ngày <?= date('d', strtotime($q['date'])) ?> tháng <?= date('m', strtotime($q['date'])) ?> năm <?= date('Y', strtotime($q['date'])) ?></p>
		<p>Nhập thời gian thay đổi lịch hẹn học viên đến trung tâm ở ô phía dưới, học viên sẽ nhận một email thông báo về việc thay đổi thời gian họ cần đến trung tâm để hoàn tất hồ sơ</p>
		<form method="post" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<input type="date" name="date" class="form-control" required>
			</div>
			<button type="submit" name='change' class="btn btn-primary mb-2">Change</button>
			<a href="?request=appointment" class="btn btn-light mb-2">Go back</a>
		</form>
	<?php endif; ?>
</div>