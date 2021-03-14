<?php
	include "../cpanel/model/database.php";
	$course = "select*from course";
	$lineup = mysqli_query($conn,$course);
?>