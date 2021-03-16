<?php
	if (isset($_GET['id'])) {
		$_SESSION['delete'] = $_POST;
		$id = $_GET['id'];
		include "../cpanel/model/database.php";
		$delete = "delete from teacher where tID='$id'";
		mysqli_query($conn,$delete);
		unset($_SESSION['delete']);
		$_SESSION['completed'] = true;
		header("Location: "."../cpanel?request=teacher");
		exit();
	}
?>