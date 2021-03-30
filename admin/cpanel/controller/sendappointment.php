<?php
	if (isset($_POST['set'])) {
		$_SESSION['invite'] = $_POST;
		$date = $_POST['date'];
		$datetime = strtotime($date);
		if ($datetime < strtotime($q['regDate'])) {
			unset($_SESSION['invite']);
			$_SESSION['past'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
			exit();
		} else if ($datetime === strtotime($q['regDate'])){
			unset($_SESSION['invite']);
			$_SESSION['dup'] = true; //không cho phép đặt trùng lịch trc đó
			header("Location: ".$_SERVER['REQUEST_URI']);
			exit();
		} else {
			$d = date('d',$datetime);
			$m = date('m',$datetime);
			$y = date('Y',$datetime);
			$email = $q['email'];
			$subject = "Completing the Course Registration";
			$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
			$body = "Dear ".$q['name'].",\n";
			$body .= "Thank you for choosing the course ".$q['cName']."!\n";
			$body .= "In order to complete your registration, please come to the Centre: ".$q['address']." of Excellent Coaching on ".$d. "/".$m."/".$y."!\n" ;
			$body .="\nPlease reply this email if you have any additional inquiry.\n";
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
		}
		
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
			$subject = "Changing schedule for course registration completing";
			$subject = '=?utf-8?B?'.base64_encode($subject).'?=';
			$body = "Dear ".$q['name'].",\n";
			$body .= "Thank you for choosing our course ".$q['cName']."!\n";
			$body .= "Due to some certain circumstances, in order to complete your course registraion, please come to the Centre".$q['address']." of Excellent Coaching on ".$d. "/".$m."/".$y."\n" ;
			$body .= "\nWe apologise for the inconvenience.";
			$body .="\nPlease reply to this email if you have any additional inquiry.\n";
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
