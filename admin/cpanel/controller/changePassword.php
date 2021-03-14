<?php
	include "../cpanel/model/database.php";
	if (isset($_POST['changePassword'])) {
		$_SESSION['changePassword'] = $_POST;
		$old = md5($_POST['oldPassword']);
		$oldQuery = "select password from admin where password = '$old'";
		if (mysqli_num_rows(mysqli_query($conn,$oldQuery)) == 1) {
			$new = md5($_POST['newPassword']);
			if ($new === $old) {
				unset($_SESSION['changePassword']);
				$_SESSION['prePassword'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			} else {
				$newQuery = "update admin set password = '$new'";
				mysqli_query($conn,$newQuery);
				unset($_SESSION['changePassword']);
				$_SESSION['pwChanged'] = true;
				unset($_SESSION['user']);
				header("Location: ". "../");
			}
		} else {
			unset($_SESSION['changePassword']);
			$_SESSION['notMatch'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>