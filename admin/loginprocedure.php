<?php
	include "../model/database.php";
	if (isset($_POST['login'])) {
		$_SESSION['log'] = $_POST;
		$user = $_POST['username'];
		$pw = md5($_POST['pw']);
		$q = "select*from admin where username like'$user' and password like '$pw'";
		$a = mysqli_query($conn,$q);
		if (mysqli_num_rows($a) == 0) {
			//lỗi đăng nhập, thông báo ra cho người dùng và quên đi việc trước đó người dùng đã từng submit form này rồi
			unset($_SESSION['log']);
			$_SESSION['failed'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			unset($_SESSION['log']);
			//thành công, chuyển người dùng sang trang admin
			$_SESSION['user'] = $user;
			header("Location: ". "/cpanel");
		}
		exit();
	}
?>