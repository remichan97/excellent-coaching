<?php
	include "../cpanel/model/database.php";
	$cat = "select*from category order by catID";
	$rs = mysqli_query($conn,$cat);
?>