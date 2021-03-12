<?php
	include "../cpanel/model/database.php";
	if (isset($_POST['send'])) {
		$_SESSION['replymsg'] = $_POST;
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$body = $_POST['msg'];
		$header = array(
			"From: Excellent Coaching Vietnam <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
			"Content-Type: text/html;charset=utf-8" //phải có nếu không email client (Outlook, Thunderbird..) sẽ không hiển thị được tiếng Việt
		);
		if (mail($email,$subject,$body,implode("\r\n",$header))) {
			unset($_SESSION['replymsg']);
			$sql = "update feedback set response = 1 where id= ".$id;
			$success = mysqli_query($conn,$sql);
			$_SESSION['sent'] = true;
			header("Location: "."../cpanel?request=feedback");
		} else {
			unset($_SESSION['replymsg']);
			$_SESSION['failed'] = true;
			header("Location: ". $_SERVER['REQUEST_URI']);
		}
		
	}
?>