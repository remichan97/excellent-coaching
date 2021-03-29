<?php if (isset($_SESSION['courseEdited']) && $_SESSION['courseEdited'] == true) : ?>
	<div class="alert alert-success">Successfully updated course information!</div>
	<?php unset($_SESSION['courseEdited']) ?>
<?php elseif (isset($_SESSION['courseDeleted']) && $_SESSION['courseDeleted'] == true) : ?>
	<div class="alert alert-success">Successfully deleted a course</div>
	<?php unset($_SESSION['courseDeleted']) ?>
<?php elseif (isset($_SESSION['courseAdded']) && $_SESSION['courseAdded'] == true) : ?>
	<div class="alert alert-success">Added a new course!</div>
	<?php unset($_SESSION['courseAdded']) ?>
<?php endif; ?>