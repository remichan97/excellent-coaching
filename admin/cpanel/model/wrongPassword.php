<?php if(isset($_SESSION['notMatch']) && $_SESSION['notMatch'] == true):?>
	<div class="alert alert-danger">Incorrect old password!</div>
	<?php unset($_SESSION['notMatch'])?>
	<?php elseif(isset($_SESSION['prePassword']) && $_SESSION['prePassword'] == true):?>
		<div class="alert alert-danger">Cannot reuse previous password!</div>
		<?php unset($_SESSION['prePassword'])?>

<?php endif;?>