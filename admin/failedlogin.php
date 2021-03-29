<?php if(isset($_SESSION['failed']) && $_SESSION['failed'] == true):?>
	<p class="alert alert-danger">Please double check your username and password</p>
	<?php unset($_SESSION['failed'])?>
	<?php elseif(isset($_SESSION['pwChanged']) && $_SESSION['pwChanged'] == true):?>
		<p class="alert alert-primary">Password changed, please sign in again</p>
		<?php unset($_SESSION['pwChanged'])?>
<?php endif;?>