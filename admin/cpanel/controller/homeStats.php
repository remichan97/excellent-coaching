<?php
	include "../cpanel/model/database.php";
	$course	= mysqli_num_rows(mysqli_query($conn,"select*from course"));
	$category = mysqli_num_rows(mysqli_query($conn,"select*from category"));
	$teacher = mysqli_num_rows(mysqli_query($conn,"select*from teacher"));
	$feedback = mysqli_num_rows(mysqli_query($conn,"select*from feedback where response = '0'"));
	$calendar = mysqli_num_rows(mysqli_query($conn,"select*from register where date = '0000-00-00'"));
?>