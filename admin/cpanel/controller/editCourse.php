<?php
if (isset($_POST['editCourse'])) {
	$_SESSION['editCourse'] = $_POST;
	$name = $_POST['name'];
	$category = $_POST['category'];
	$teacher = $_POST['teacher'];
	$price = $_POST['price'];
	$duration = $_POST['duration'];
	$status = $_POST['status'];
	$description = $_POST['description'];
	$description = trim($_POST['description']);
	$description = preg_replace("/\<p\>\&nbsp\;\<\/p\>/", "", $description);
	$description = preg_replace("/\&nbsp\;+/", " ", $description);
	$description = preg_replace("/\s+/", " ", $description);
	$edit = "update course set cName = '$name', catID = '$category', tID = '$teacher', price = '$price', duration = '$duration', status = $status, description = '$description' where cID = '$id'";
	mysqli_query($conn, $edit);
	unset($_SESSION['editCourse']);
	$_SESSION['courseEdited'] = true;
	header("Location: " . "../cpanel?request=course");
	exit();
}
