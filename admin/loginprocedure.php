<?php
	include "../model/database.php";
	if (isset($_POST['login'])) {
		$_SESSION['log'] = $_POST; //sinh session này để làm hết mọi việc truy vấn vào trong cơ sở dữ liệu, sau khi kết thúc sẽ xóa bỏ session này ở phía dưới 
		$user = $_POST['username'];
		$pw = md5($_POST['pw']);
		$q = "select*from admin where username like'$user' and password like '$pw'";
		$a = mysqli_query($conn,$q);
		if (mysqli_num_rows($a) == 0) {
			//lỗi đăng nhập, thông báo ra cho người dùng và quên đi việc trước đó người dùng đã từng submit form này rồi
			unset($_SESSION['log']); //xóa bỏ session truy vấn
			$_SESSION['failed'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			unset($_SESSION['log']);
			//thành công, chuyển người dùng sang trang admin
			$_SESSION['user'] = $user;
			header("Location: ". "/admin/cpanel");
		}
		exit();
	}
?>