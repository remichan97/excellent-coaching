<?php if (isset($_SESSION['added']) && $_SESSION['added'] == true) : ?>
	<div class="alert alert-success">New teacher added</div>
	<?php unset($_SESSION['added']) ?>
<?php elseif (isset($_SESSION['completed']) && $_SESSION['completed'] == true) : ?>
	<div class="alert alert-success">Successfully deleted a teacher</div>
	<?php unset($_SESSION['completed']) ?>
<?php elseif (isset($_SESSION['updated']) && $_SESSION['updated'] == true) : ?>
	<div class="alert alert-success">Successfully updated teacher information</div>
	<?php unset($_SESSION['updated']) ?>
<?php endif; ?>