<?php
	include "../cpanel/model/database.php";
	if (isset($_POST['addTeacher'])) {
		$_SESSION['addTeacher'] = $_POST;
		$name = $_POST['name'];
		$dup = "select*from teacher where name like '$name'";
		$checkDup = mysqli_query($conn,$dup);
		if (mysqli_num_rows($checkDup) == 1) {
			unset($_SESSION['addTeacher']);
			$_SESSION['addDup'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			$info = $_POST['info'];
			$fileName = $_FILES['image']['name'];
			$fileTemp = $_FILES['image']['tmp_name'];
			$path = "../assets/img/";
			$imagefile = time()."_".$fileName;
			$ext = substr($imagefile,strlen($imagefile)-3,3);
			$ext1 = substr($imagefile,strlen($imagefile)-4,4);
			if ($ext=="JPG"||$ext=="jpg"||$ext1=="JPEG"||$ext1=="jpeg"||$ext=="GIF"||$ext=="gif"||$ext=="BMP"||$ext=="bmp"||$ext=="PNG"||$ext=="png") {
				move_uploaded_file($fileTemp,$path.$imagefile);
				$addteacher = "insert into teacher (name,photo,description) values ('$name','$imagefile','$info')";
				mysqli_query($conn,$addteacher);
				unset($_SESSION['addTeacher']);
				$_SESSION['added'] = true;
				header("Location: "."../cpanel?request=teacher");
			} else {
				unset($_SESSION['addTeacher']);
				$_SESSION['addFailed'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
			}	
		}
		exit();
	}
?>