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
		<p>Currently student has been schedule to visit the centre on <?= date('d', strtotime($q['date'])) ?>/<?= date('m', strtotime($q['date'])) ?>/<?= date('Y', strtotime($q['date'])) ?></p>
		<p>Enter the new date in which you want to change the student appointment. They will receive an email notifying them about the change</p>
		<form method="post" class="form-inline">
			<div class="form-group mx-sm-3 mb-2">
				<input type="date" name="date" class="form-control" required>
			</div>
			<button type="submit" name='change' class="btn btn-primary mb-2">Change</button>
			<a href="?request=appointment" class="btn btn-light mb-2">Go back</a>
		</form>
	<?php endif; ?>
</div>