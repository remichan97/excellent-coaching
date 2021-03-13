<?php include "../cpanel/controller/addTeacher.php"?>

<div class="addTeacher">
	<?php if(isset($_SESSION['addDup']) && $_SESSION['addDup'] == true):?>
		<div class="alert alert-danger">Giảng viên cần thêm đã có trong hệ thống</div>
		<?php unset($_SESSION['addDup'])?>
		<?php elseif(isset($_SESSION['addFailed']) && $_SESSION['addFailed'] == true):?>
			<div class="alert alert-danger">Đã có lỗi xảy ra, vui lòng thử lại trong giây lát</div>
			<?php unset($_SESSION['addFailed'])?>
	<?php endif;?>
	<h3>Thêm giảng viên</h3>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group row">
		<label for="name" class="col-md-2 col-form-label">Tên giảng viên:</label>
		<input type="text" name="name" id="name" class="form-control col-md-7" required>
		</div>
		<div class="form-group row">
			<label for="imageTeacher" class="col-md-2 col-form-label">Chọn ảnh:</label>
			<input type="file" name="image" id="imageTeacher" class="form-control-file col-md-7" required accept="image/jpeg, image/png">
		</div>
		<div class="form-group row">
			<label for="info" class="col-md-2 col-form-label">Thông tin về giảng viên:</label>
			<textarea name="info" id="info" cols="30" rows="10">
			</textarea>
			<script>CKEDITOR.replace('info')</script>
		</div>
		<button type="submit" class="btn btn-primary" name="addTeacher">Thêm giảng viên</button>
		<a href="?request=teacher" class="btn btn-light">Trở về</a>
	</form>
</div>