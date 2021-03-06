<?php
	if (isset($_POST['sendmsg'])) {
		$_SESSION['feedback'] = $_POST;
		$email = $_POST['email'];
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$subject = $_POST['subject'];
			$body = $_POST['body'];
			$feedback = "insert into feedback (email,subject,body) values ('$email','$subject','$body')";
			$msg = mysqli_query($conn,$feedback);
			if (mysqli_affected_rows($conn) == 1) {
				unset($_SESSION['feedback']);
				$_SESSION['sent'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			} else {
				unset($_SESSION['feedback']);
				$_SESSION['failed'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);

			}
			
		} else {
			unset($_SESSION['feedback']);
			$_SESSION['invalidemail'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>