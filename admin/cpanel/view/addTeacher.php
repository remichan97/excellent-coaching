<?php include "../cpanel/controller/addTeacher.php" ?>

<div class="addTeacher">
	<?php include "../cpanel/model/errorAddTeacher.php"?>
	<h3>Thêm giảng viên</h3>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group row">
			<label for="name" class="col-md-2 col-form-label">Tên giảng viên:</label>
			<input type="text" name="name" id="name" class="form-control col-md-7" required>
		</div>
		<div class="form-group row">
			<label for="prefession" class="col-md-2 col-form-label">Chuyên ngành:</label>
			<input type="text" name="profession" id="profession" class="form-control col-md-7" required>
		</div>
		<div class="form-group row">
			<label for="imageTeacher" class="col-md-2 col-form-label">Chọn ảnh:</label>
			<input type="file" name="image" id="imageTeacher" class="form-control-file col-md-7" required accept="image/jpeg, image/png">
		</div>
		<div class="form-group row">
			<label for="info" class="col-md-2 col-form-label">Thông tin về giảng viên:</label>
			<textarea name="info" id="info" cols="30" rows="10">
			</textarea>
			<script>
				CKEDITOR.replace('info')
			</script>
		</div>
		<button type="submit" class="btn btn-primary" name="addTeacher">Thêm giảng viên</button>
		<a href="?request=teacher" class="btn btn-light">Trở về</a>
	</form>
</div>