<?php 
	if (isset($_GET['id'])) {
		$_SESSION['deleteCourse'] = $_POST;
		$id = $_GET['id'];
		$delete = "delete from course where cID = '$id'";
		mysqli_query($conn,$delete);
		unset($_SESSION['deleteCourse']);
		$_SESSION['courseDeleted'] = true;
		header("Location: "."../cpanel?request=course");
		exit();
	}
?>