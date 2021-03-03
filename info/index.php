<?php
	$db = mysqli_connect('localhost','root','','excoaching');
	if (isset($_GET['courseID'])) {
		$q = "select description from course where cID=".$_GET['courseID'];
		$r = mysqli_query($db,$q);
	}
?>

<?php foreach($r as $i):?>
	<p><?=$i['description']?></p>
<?php endforeach;?>