<?php
include "../cpanel/model/database.php";
$a = "select id,name,email,cName,addID,ref,regDate,date from register a join course b on a.cID = b.cID";
$ap = mysqli_query($conn, $a);
?>