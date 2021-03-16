<?php
include "../cpanel/model/database.php";
$a = "select id,name,email,cName,stdAddress,address,ref,regDate,date from register a join course b on a.cID = b.cID join address c on a.addID=c.addID";
$ap = mysqli_query($conn, $a);
?>