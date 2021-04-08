<?php if (isset($_GET['courseID'])) : ?>
	<?php
	$id = $_GET['courseID'];
	$des = "select name,cName,price,a.description,a.price,a.duration from course a join teacher b on a.tID = b.tID where cID='$id'";
	$detail = mysqli_query($conn, $des);
	$d = mysqli_fetch_array($detail);
	$address = "select*from address";
	$a = mysqli_query($conn,$address);
	?>
<?php endif; ?>