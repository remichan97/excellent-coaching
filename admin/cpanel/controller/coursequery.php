<?php
	include "../cpanel/model/database.php";
	$course = "select cID,cName,catName,name,price,duration,status from course a join teacher b on a.tID = b.tID join category c on a.catID=c.catID order by cID";
	$lineup = mysqli_query($conn,$course);
?>