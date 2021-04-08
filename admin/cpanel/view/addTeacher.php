<?php include "../cpanel/controller/addTeacher.php" ?>

<div class="addTeacher">
	<?php include "../cpanel/model/errorAddTeacher.php"?>
	<h3>Add a teacher</h3>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="name" class="col-md-2 col-form-label">Teacher name:</label>
			<input type="text" name="name" id="name" class="form-control col-md-7" required>
		</div>
		<div class="form-group row">
			<label for="prefession" class="col-md-2 col-form-label">Best Field:</label>
			<input type="text" name="profession" id="profession" class="form-control col-md-7" required>
		</div>
		<div class="form-group row">
			<label for="imageTeacher" class="col-md-2 col-form-label">Choose an image:</label>
			<input type="file" name="image" id="imageTeacher" class="form-control-file col-md-7" required accept="image/jpeg, image/png">
		</div>
		<div class="form-group row">
			<label for="info" class="col-md-2 col-form-label">Teacher information:</label>
			<textarea name="info" id="info" cols="30" rows="10">
			</textarea>
			<script>
				CKEDITOR.replace('info')
			</script>
		</div>
		<button type="submit" class="btn btn-primary" name="addTeacher">Add Teacher</button>
		<a href="?request=teacher" class="btn btn-light">Go back</a>
	</form>
</div>