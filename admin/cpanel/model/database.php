<?php
	$h = "localhost";
	$username = "root";
	$pw = "";
	$db = "excoaching";
	$conn = mysqli_connect($h,$username,$pw,$db);
	if (!$conn) {
		echo mysqli_error($conn);
	}
?>