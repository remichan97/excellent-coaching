<?php include "../cpanel/controller/coursequeryinfo.php"?>
<?php include "../cpanel/controller/editCourse.php"?>
<div class="editCourse">
<?php if(isset($_SESSION['dupEdit']) && $_SESSION['dupEdit'] == true):?>
	<div class="alert alert-danger">Duplicate course name!</div>
	<?php unset($_SESSION['dupEdit'])?>
<?php endif;?>
	<h3>Edit course information</h3>
	<form method="post">
		<div class="form-group row">
			<label for="name" class="col-md-2 col-form-label">Course name:</label>
			<input type="text" name="name" id="name" class="col-md-8 form-control" value="<?=$courseinfo['cName']?>">
		</div>
		<div class="form-group row">
			<label for="cat" class="col-md-2 col-form-label">Category:</label>
			<select name="category" id="cat" class="form-control col-md-8">
				<?php foreach($category as $item):?>
					<option value="<?=$item['catID']?>" <?=$item['catID']==$courseinfo['catID']?'selected':''?>><?=$item['catName']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="teacher" class="col-md-2 col-form-label">Teacher:</label>
			<select name="teacher" id="teacher" class="form-control col-md-8">
				<?php foreach($teacher as $item):?>
					<option value="<?=$item['tID']?>" <?=$item['tID']==$courseinfo['tID']?'selected':''?>><?=$item['name']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-2 col-form-label">Course Fee:</label>
			<input type="number" step="1000" name="price" id="price" class="col-md-8 form-control" value="<?=$courseinfo['price']?>">
		</div>
		<div class="form-group row">
			<label for="duration" class="col-md-2 col-form-label">Duration &#40;month&#41;:</label>
			<input type="number" step="1" name="duration" id="duration" class="col-md-8 form-control" value="<?=$courseinfo['duration']?>">
		</div>
		<div class="form-group row">
			<label for="status" class="col-md-2 col-form-label">Visibility:</label>
			<select name="status" id="status" class="form-control col-md-8">
					<option value="1" <?=$courseinfo['status'] == 1? 'selected':''?>>Show</option>
					<option value="0" <?=$courseinfo['status'] == 0? 'selected':''?>>Hide</option>
			</select>
		</div>
		<div class="form-group row">
			<label for="courseDescription" class="col-md-2 col-form-label">Description:</label>
			<textarea name="description" id="courseDescription" cols="30" rows="10"><?=$courseinfo['description']?></textarea>
			<script>CKEDITOR.replace('courseDescription')</script>
		</div>
		<button type="submit" name="editCourse" class="btn btn-primary">Update</button>
		<a href="?request=course" class="btn btn-light">Go back</a>
	</form>
</div>