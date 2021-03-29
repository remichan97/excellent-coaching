<?php 
	include "../cpanel/model/database.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($conn,"select*from teacher where tID = '$id'");
		$teacher = mysqli_fetch_array($query);
	}
?>

<?php include "../cpanel/controller/updateTeacher.php"?>
<div class="updateTeacher">
	<?php include "../cpanel/model/errorUpdateTeacher.php"?>
	<h3>Update teacher information</h3>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group row">
		<label for="name" class="col-md-2 col-form-label">Name:</label>
		<input type="text" name="name" id="name" value="<?=$teacher['name']?>" class="form-control col-md-7">
		</div>
		<div class="form-group row">
		<label for="profession" class="col-md-2 col-form-label">Best field:</label>
		<input type="text" name="profession" id="profession" value="<?=$teacher['profession']?>" class="form-control col-md-7">
		</div>
		<div class="form-group row">
		<label for="name" class="col-md-2 col-form-label">Current photo</label>
		<?php if($teacher['photo']):?>
			<div class="col-md-7">
				<img src="../assets/img/<?=$teacher['photo']?>">
			</div>
			<?php else:?>
				<div class="col-md-7 col-form-label">No photo</div>
		<?php endif;?>
		</div>
		<div class="form-group row">
			<label for="image" class="col-md-2 col-form-label">New photo:</label>
			<input type="file" name="image" id="image" class="form-control-file col-md-7" accept="image/jpeg, image/png">
		</div>
		<div class="form-group row">
			<label for="info" class="col-md-2 col-form-label">Information:</label>
			<textarea name="info" id="info" cols="30" rows="10">
				<?=$teacher['description']?>
			</textarea>
			<script>CKEDITOR.replace('info')</script>
		</div>
		<button type="submit" class="btn btn-primary" name="updateTeacher">Update</button>
		<a href="?request=teacher" class="btn btn-light">Go back</a>
	</form>
</div>