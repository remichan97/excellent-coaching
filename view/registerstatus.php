<?php if (isset($_SESSION['success']) && $_SESSION['success'] == true) : ?>
	<p class="alert alert-success" role="alert">Thank you, your registration information has been saved! Please expect a confirmation email from us in a few moment</p>
	<?php unset($_SESSION['success']) ?>
<?php elseif (isset($_SESSION['failed']) && $_SESSION['failed'] == true) : ?>
	<p class="alert alert-danger" role="alert">Sorry, something went wrong, please try again later!</p>
	<?php unset($_SESSION['failed']) ?>
<?php elseif (isset($_SESSION['duplicate']) && $_SESSION['duplicate'] == true) : ?>
		<p class="alert alert-danger" role="alert">We already received a course registration from you for this course!</p>
		<?php unset($_SESSION['duplicate']) ?>
<?php elseif (isset($_SESSION['invalidemail']) && $_SESSION['invalidemail'] == true) : ?>
	<p class="alert alert-warning" role="alert">Invalid email format, please check and try again</p>
	<?php unset($_SESSION['invalidemail']) ?>
<?php endif; ?>