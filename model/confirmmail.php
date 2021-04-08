<?php
			if (mysqli_affected_rows($conn) == 1) {
				$subject = "Course registration Verification";
				$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
				$body = "Dear ". $name . "\n";
				$body.= "Thank you for registering for the course ". $d['cName'] . ".\n";
				$body.= "Below are the register information you sent us:\n";
				$body.="\nYour fullname: ". $name ."\n";
				$body.="Email: ".$email."\n";
				$body.="Your phone number: ".$phone."\n";
				$body.="Your home Address: ".$address."\n";
				$body.="You will enroll the course at Centre no.".$centre.": ". $ad['address']. "\n";
				$body.="\nYou know about us via ".$ref."\r\n";
				$body.="\nWi will inform you about the day you need to visit the centre of choice to complete your registration as soon as possible!\n";
				$header = array(
					"From: Excellent Coaching <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
					"Content-Type: text/plain;charset=utf-8" //phải có nếu không email client (Outlook, Thunderbird..) sẽ không hiển thị được tiếng Việt
				);
				mail($email,$subject,$body,implode("\r\n",$header));
				unset($_SESSION['reg']);
				$_SESSION['success'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			} else {
				unset($_SESSION['reg']);
				$_SESSION['failed'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			}
?>