<article class="col-md-10">
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
			case 'appointment':
				include "../cpanel/view/appointment.php";
			break;
			case 'setAppoint':
				include "../cpanel/view/setAppoint.php";
			break;
			default:
				# code...
				break;
		}
	}
?>
</article>