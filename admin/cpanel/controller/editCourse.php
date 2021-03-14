<?php 
	if (isset($_POST['editCourse'])) {
		$_SESSION['editCourse'] = $_POST;
		$name = $_POST['name'];
		if (mysqli_num_rows(mysqli_query($conn,"select cName from course where cName like '$name'")) == 1) {
			unset($_SESSION['editCourse']);
			$_SESSION['dupEdit'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
			exit();
		} else {
			$category = $_POST['category'];
			$teacher =$_POST['teacher'];
			$price = $_POST['price'];
			$duration = $_POST['duration'];
			$status = $_POST['status'];
			$description = $_POST['description'];
			$edit = "update course set cName = '$name', catID = '$category', teacher = '$teacher', price = '$price', duration = '$duration', $status = '$status', description = '$description' where cID = '$id'";
			mysqli_query($conn,$edit);
			unset($_SESSION['editCourse']);
			$_SESSION['courseEdited'] = true;
			header("Location: "."../cpanel?request=course");
		}
		exit();
	}
?>