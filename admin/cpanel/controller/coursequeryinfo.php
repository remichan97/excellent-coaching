<?php
	if (isset($_GET['id'])) {
		include "../cpanel/model/database.php";
		$id = $_GET['id'];
		$all = "select*from course where cID= '$id'";
		$courseinfo = mysqli_query($conn,$all);
		$courseinfo = mysqli_fetch_array($courseinfo);
		$teach = "select * from teacher";
		$teacher = mysqli_query($conn,$teach);
		$cat ="select*from category";
		$category = mysqli_query($conn,$cat);
	}
?>