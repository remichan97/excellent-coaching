<article class="col-md-9">
<?php
	if (isset($_GET['request'])) {
		switch ($_GET['request']) {
			case 'logout':
				unset($_SESSION['user']);
				header("Location: ". "../");
				break;
			case 'feedback':
				include "../cpanel/view/feedback.php";
				break;
			case 'reply':
				include "../cpanel/view/reply.php";
				break;
			
			default:
				# code...
				break;
		}
	}
?>
</article>