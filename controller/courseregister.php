<?php 
	if (isset($_POST['submit'])) {
		$_SESSION['reg'] = $_POST;
		$name = $_POST['name'];
		$email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$centre = $_POST['centre'];
			$ref = $_POST['ref'];
			$duplicate = "select*from register where name = '$name' and email='$email' and cID = '$id'";
			$dup = mysqli_query($conn,$duplicate);
			if (mysqli_num_rows($dup) == 1) {
				unset($_SESSION['reg']);
				$_SESSION['duplicate'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			} else {
				$add = "insert into register (name,email,cID,addID,ref) values ('$name','$email','$id','$centre','$ref')";
				$rs = mysqli_query($conn,$add);
				include "./model/confirmmail.php";
			}
			
		} else {
			unset($_SESSION['reg']);
			$_SESSION['invalidemail'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
