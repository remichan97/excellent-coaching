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
			$duplicate = "select*from register where name = '$name' and cID = '$id'";
			$dup = mysqli_query($conn,$duplicate);
			if (mysqli_num_rows($dup) == 1) {
				unset($_SESSION['reg']);
				$_SESSION['duplicate'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			} else {
				$add = "insert into register (name,email,cID,stdAddress,addID,ref,regDate) values ('$name','$email','$id','$address','$centre','$ref',CURDATE())";
				$rs = mysqli_query($conn,$add);
				$emailad = "select*from address where addID = '$centre'";
				$ad = mysqli_query($conn,$emailad);
				$ad=mysqli_fetch_array($ad);
				include "../model/confirmmail.php";
			}
			
		} else {
			unset($_SESSION['reg']);
			$_SESSION['invalidemail'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
