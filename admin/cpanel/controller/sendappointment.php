<?php
	if (isset($_POST['set'])) {
		$_SESSION['invite'] = $_POST;
		$date = $_POST['date'];
		$datetime = strtotime($date);
		$d = date('d',$datetime);
		$m = date('m',$datetime);
		$y = date('Y',$datetime);
		$email = $q['email'];
		$subject = "Hẹn học viên đến hoàn tất hồ sơ đăng ký khóa học";
		$body = "Dear ".$q['name'].",\n";
		$body .= "Cảm ơn bạn đã đăng ký tham gia khóa học ".$q['cName']."!\n";
		$body .= "Để hoàn tất hồ sơ đăng ký khóa học, mời bạn đến cơ sở".$q['address']." của Excellent Coaching Vietnam vào ngày ".$d. " tháng ".$m." năm ".$y."!\n" ;
		$body .="\nVui lòng trả lời lại email này nếu bạn có thắc mắc cần được giảỉ đáp.\n";
		$header = array(
			"From: Excellent Coaching Vietnam <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
			"Content-Type: text/plain;charset=utf-8" //phải có nếu không email client (Outlook, Thunderbird..) sẽ không hiển thị được tiếng Việt
		);
		if (mail($email,$subject,$body,implode("\r\n",$header))) {
			unset($_SESSION['invite']);
			$sql = "update register set date = '$date' where id = ".$id;
			$inv = mysqli_query($conn,$sql);
			$_SESSION['invited'] = true;
			header("Location: "."../cpanel?request=appointment");		
		} else {
			unset($_SESSION['invite']);
			$_SESSION['notinvited'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
		
	} else if (isset($_POST['change'])) {
		$_SESSION['invite'] = $_POST;
		$date = $_POST['date'];
		if (strtotime($date) === strtotime($q['date'])) {
			unset($_SESSION['invite']);
			$_SESSION['dup'] = true; //không cho phép đặt trùng lịch trc đó
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else if (strtotime($date) < strtotime($q['date'])) {
			unset($_SESSION['invite']);
			$_SESSION['past'] = true; //không cho phép đặt lịch hẹn trong quá khứ
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			$datetime = strtotime($date);
			$d = date('d',$datetime);
			$m = date('m',$datetime);
			$y = date('Y',$datetime);
			$email = $q['email'];
			$subject = "Thay đổi thời gian học viên đến hoàn tất hồ sơ đăng ký khóa học";
			$body = "Dear ".$q['name'].",\n";
			$body .= "Cảm ơn bạn đã đăng ký tham gia khóa học ".$q['cName']."!\n";
			$body .= "Vì một số lý do ngoài mong muốn, nên để hoàn tất hồ sơ đăng ký khóa học, mời bạn đến cơ sở".$q['address']." của Excellent Coaching Vietnam vào ngày ".$d. " tháng ".$m." năm ".$y."\n" ;
			$body .= "\nChúng tôi xin lỗi vì sự bất tiện này.";
			$body .="\nVui lòng trả lời lại email này nếu bạn có thắc mắc cần được giảỉ đáp.\n";
			$header = array(
				"From: Excellent Coaching Vietnam <excellentcoachingvn@gmail.com>", //phải có nếu không mớ phía dưới không gửi được mail
				"Content-Type: text/plain;charset=utf-8" //phải có nếu không email client (Outlook, Thunderbird..) sẽ không hiển thị được tiếng Việt
			);
			if (mail($email,$subject,$body,implode("\r\n",$header))) {
				unset($_SESSION['invite']);
				$sql = "update register set date = '$date' where id = ".$id;
				$inv = mysqli_query($conn,$sql);
				$_SESSION['changed'] = true;
				header("Location: "."../cpanel?request=appointment");		
			} else {
				unset($_SESSION['invite']);
				$_SESSION['notinvited'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			}
		}
		exit(); //đôi khi tôi tự hỏi tại sao không có cái mắc dịch này thì cái pop-up thông báo cho người dùng không bao giờ hoạt động???
	}
?>