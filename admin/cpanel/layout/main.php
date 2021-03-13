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
			case 'changeAppoint':
				include "../cpanel/view/setAppoint.php";
			break;
			case 'teacher':
				include "../cpanel/view/teacher.php";
			break;
			case 'updateTeacher':
				include "../cpanel/view/updateTeacher.php";
			break;
			case 'addTeacher':
				include "../cpanel/view/addTeacher.php";
			break;
			case 'deleteTeacher':
				include "../cpanel/controller/deleteTeacher.php";
			break;
			default:
				include "../cpanel/view/home.php";	
			break;
		}
	}
?>
</article>