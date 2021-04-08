<?php 
	include "../cpanel/model/database.php";
	$teach = "select * from teacher";
	$teacher = mysqli_query($conn,$teach);
	$cat ="select*from category";
	$category = mysqli_query($conn,$cat);
?>