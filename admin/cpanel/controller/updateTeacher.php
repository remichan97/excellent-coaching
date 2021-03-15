<?php
	if (isset($_POST['updateTeacher'])) {
		$_SESSION['updateTeacher'] =$_POST;
		$name = $_POST['name'];
		$info = $_POST['info'];
		$pro = $_POST['profession'];
		$image = $teacher['photo'];
		$fileName= $_FILES['image']['name'];
		if ($fileName == null) {
			$imagefile = $image;
		} else {
			$fileTemp = $_FILES['image']['tmp_name'];
			$path = "../assets/img/";
			$imagefile = time()."_".$fileName;
			$ext = substr($imagefile,strlen($imagefile)-3,3);
			$ext1 = substr($imagefile,strlen($imagefile)-4,4);
			if ($ext=="JPG"||$ext=="jpg"||$ext1=="JPEG"||$ext1=="jpeg"||$ext=="GIF"||$ext=="gif"||$ext=="BMP"||$ext=="bmp"||$ext=="PNG"||$ext=="png") {
				unlink($path.$image);
				move_uploaded_file($fileTemp,$path.$imagefile);
			} else {
				unset($_SESSION['updateTeacher']);
				$_SESSION['invalidFile'] = true;
				header("Location: ".$_SERVER['REQUEST_URI']);
				exit();
			}
		}
		$updateteacher = "update teacher set name='$name',profession='$pro',photo='$imagefile',description='$info' where id = '$id'";
		if (mysqli_query($conn,$updateteacher)) {
			unset($_SESSION['updateTeacher']);
			$_SESSION['updated'] = true;
			header("Location: "."../cpanel?request=teacher");
		} else {
			unset($_SESSION['updateTeacher']);
			$_SESSION['error'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>