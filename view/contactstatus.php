<?php if (isset($_SESSION['sent']) && $_SESSION['sent'] == true) : ?>
	<p class="alert alert-success">Thank you for your message! We will reach back to you soon!</p>
	<?php unset($_SESSION['sent']) ?>
<?php elseif (isset($_SESSION['failed']) && $_SESSION['failed'] == true) : ?>
	<p class="alert alert-danger">Sorry, something went wrong, please try again later.</p>
	<?php unset($_SESSION['failed']) ?>
<?php elseif (isset($_SESSION['invalidemail']) && $_SESSION['invalidemail'] == true) : ?>
	<p class="alert alert-warning">Invalid email address! Please check and try again</p>
	<?php unset($_SESSION['invalidemail']) ?>
<?php endif; ?>