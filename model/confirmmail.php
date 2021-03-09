<?php
			if (mysqli_affected_rows($conn) == 1) {
				$subject = "Xác nhận đăng ký khóa học";
				$body = "Dear ". $name . "\n";
				$body.= "Cảm ơn bạn đã đăng ký tham gia khóa học ". $d['cName'] . ".\n";
				$body.= "Dưới đây là thông tin đăng ký khóa học mà bạn đã gửi cho chúng tôi:\n";
				$body.="Họ và tên: ". $name ."\n";
				$body.="Email: ".$email."\n";
				$body.="Số điện thoại: ".$phone."\n";
				$body.="Địa chỉ: ".$address."\n";
				$body.="Bạn sẽ tham gia khóa học này ở cơ sở ".$centre."\n";
				$body.="Bạn biết đến chúng tôi thông qua ".$ref."\r\n";
				$body.="\nChúng tôi sẽ thông báo cho bạn thời gian bạn cần đến trung tâm để hoàn tất hố sơ trong 24 giờ tới!\n";
				$header = array(
					"From: Excellent Coaching Vietnam <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
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
			exit();
?>