<?php
	if (isset($_GET['request'])) {
		switch ($_GET['request']) {
			case 'logout':
				unset($_SESSION['user']);
				header("Location: ". "../");
				break;
			
			default:
				# code...
				break;
		}
	}
?>