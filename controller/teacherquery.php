<?php 
	include "../model/database.php";
	$sql = "select*from teacher";
	$query = mysqli_query($conn,$sql);
?>