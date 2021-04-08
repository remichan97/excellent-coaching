<?php
	include "../cpanel/model/database.php";
	if (isset($_GET['feedbackid'])) {
		$_SESSION['deleteFeedback'] = $_POST;
		$delid = $_GET['feedbackid'];
		$sql = "delete from feedback where id = '$delid'";
		mysqli_query($conn,$sql);
		unset($_SESSION['deleteFeedback']);
		$_SESSION['feedbackDeleted'] = true;
		header("Location: "."../cpanel?request=feedback");
		exit();
	}
?>