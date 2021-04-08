<?php include "../cpanel/controller/homeStats.php" ?>

<div class="home">
	<h3>We currently having:</h3>
	<div class="row">
		<div class="col-sm-3">
			<div class="card border-primary">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/database.png" /> <a href="?request=course"><?= $course ?> courses</a> and <a href="?request=category"><?= $category ?> categories</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-success">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/guest-male.png" /> <a href="?request=teacher"><?= $teacher ?> teachers</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-primary">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/48/000000/calendar.png"/> <a href="?request=appointment"><?= $calendar ?> new registration</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-info">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/email-open.png"/> <a href="?request=feedback"><?= $feedback ?> new messages</a></p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<p>Click on a link to go to its relevant page.</p>
</div>