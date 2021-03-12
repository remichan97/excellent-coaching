<?php 
	if (isset($_POST['send'])) {
		$_SESSION['sendmsg'] = $_POST;
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$body = $_POST['msg'];
		$header = array(
			"From: Excellent Coaching Vietnam <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
			"Content-Type: text/html;charset=utf-8" //phải có nếu không email client (Outlook, Thunderbird..) sẽ không hiển thị được tiếng Việt
		);
		
	}
?>