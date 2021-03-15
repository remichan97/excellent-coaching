<?php include "../cpanel/controller/addCourseOption.php"?>
<?php include "../cpanel/controller/addCourse.php"?>

<div class="addCourse">
<?php if(isset($_SESSION['dupAdd']) && $_SESSION['dupAdd'] == true):?>
	<div class="alert alert-danger">Trùng tên khóa học!</div>
	<?php unset($_SESSION['dupAdd'])?>
<?php endif;?>
	<h3>Thêm khóa học</h3>
	<form method="post">
		<div class="form-group row">
			<label for="name" class="col-md-2 col-form-label">Tên khóa học:</label>
			<input type="text" name="name" id="name" class="col-md-8 form-control" required>
		</div>
		<div class="form-group row">
			<label for="cat" class="col-md-2 col-form-label">Danh mục khóa học:</label>
			<select name="category" id="cat" class="form-control col-md-8" required>
				<option value="" hidden>Chọn một...</option>
				<?php foreach($category as $item):?>
					<option value="<?=$item['catID']?>"><?=$item['catName']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="teacher" class="col-md-2 col-form-label">Giảng viên đào tạo:</label>
			<select name="teacher" id="teacher" class="form-control col-md-8" required>
				<option value="" hidden>Chọn một...</option>
				<?php foreach($teacher as $item):?>
					<option value="<?=$item['id']?>"><?=$item['name']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-2 col-form-label">Học phí:</label>
			<input type="number" step="1000" name="price" id="price" class="col-md-8 form-control" required>
		</div>
		<div class="form-group row">
			<label for="duration" class="col-md-2 col-form-label">Thời lượng khóa học &#40;tháng&#41;:</label>
			<input type="number" step="1" name="duration" id="duration" class="col-md-8 form-control" required>
		</div>
		<div class="form-group row">
			<label for="status" class="col-md-2 col-form-label">Hiển thị khóa học:</label>
			<select name="status" id="status" class="form-control col-md-8" required>
					<option value="1">Có</option>
					<option value="0">Không</option>
			</select>
		</div>
		<div class="form-group row">
			<label for="courseDescription" class="col-md-2 col-form-label">Mô tả khóa học:</label>
			<textarea name="description" id="courseDescription" cols="30" rows="10"></textarea>
			<script>CKEDITOR.replace('courseDescription')</script>
		</div>
		<button type="submit" name="addCourse" class="btn btn-primary">Thêm khóa học</button>
		<a href="?request=course" class="btn btn-light">Trở về</a>
	</form>
</div>