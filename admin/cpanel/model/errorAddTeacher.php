<?php if (isset($_SESSION['addDup']) && $_SESSION['addDup'] == true) : ?>
	<div class="alert alert-danger">There is already a teacher with the name you're trying to add</div>
	<?php unset($_SESSION['addDup']) ?>
<?php elseif (isset($_SESSION['addFailed']) && $_SESSION['addFailed'] == true) : ?>
	<div class="alert alert-danger">Something went wrong, please wait a moment and try again</div>
	<?php unset($_SESSION['addFailed']) ?>
<?php endif; ?>