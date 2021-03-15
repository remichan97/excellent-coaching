<?php 
	if (isset($_POST['addCourse'])) {
		$_SESSION['addCourse'] = $_POST;
		$name = $_POST['name'];
		if (mysqli_num_rows(mysqli_query($conn,"select cName from course where cName like '$name'")) == 1) {
			unset($_SESSION['addCourse']);
			$_SESSION['dupAdd'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
			exit();
		} else {
			$category = $_POST['category'];
			$teacher =$_POST['teacher'];
			$price = $_POST['price'];
			$duration = $_POST['duration'];
			$status = $_POST['status'];
			$description = $_POST['description'];
			$add = "insert into course (catID,cName,teacher,price,duration,status,description) values ('$category','$name','$teacher','$price','$duration',$status,'$description')";
			mysqli_query($conn,$add);
			unset($_SESSION['addCourse']);
			$_SESSION['courseAdded'] = true;
			header("Location: "."../cpanel?request=course");
		}
		exit();
	}
?>