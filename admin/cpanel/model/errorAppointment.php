<?php if (isset($_SESSION['notinvited']) && $_SESSION['notinvited'] == true) : ?>
	<p class="alert alert-danger">Unable to send student the schedule set, please try again later</p>
	<?php unset($_SESSION['notinvited']) ?>
<?php elseif (isset($_SESSION['dup']) && $_SESSION['dup'] == true) : ?>
	<p class="alert alert-danger">The new schedule is the same as the student registration date</p>
	<?php unset($_SESSION['dup']) ?>
<?php elseif (isset($_SESSION['past']) && $_SESSION['past'] == true) : ?>
	<p class="alert alert-danger">Cannot set a schedule in the past</p>
	<?php unset($_SESSION['past']) ?>
<?php endif; ?>