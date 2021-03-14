<?php include "../cpanel/controller/coursequeryinfo.php"?>
<?php include "../cpanel/controller/editCourse.php"?>
<div class="editCourse">
<?php if(isset($_SESSION['dupEdit']) && $_SESSION['dupEdit'] == true):?>
	<div class="alert alert-danger">Trùng tên khóa học!</div>
	<?php unset($_SESSION['dupEdit'])?>
<?php endif;?>
	<h3>Chỉnh sửa thông tin khóa học</h3>
	<form method="post">
		<div class="form-group row">
			<label for="name" class="col-md-2 col-form-label">Tên khóa học:</label>
			<input type="text" name="name" id="name" class="col-md-8 form-control" value="<?=$courseinfo['cName']?>">
		</div>
		<div class="form-group row">
			<label for="cat" class="col-md-2 col-form-label">Danh mục khóa học:</label>
			<select name="category" id="cat" class="form-control col-md-8">
				<?php foreach($category as $item):?>
					<option value="<?=$item['catID']?>" <?=$item['catID']==$courseinfo['catID']?'selected':''?>><?=$item['catName']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="teacher" class="col-md-2 col-form-label">Giảng viên đào tạo:</label>
			<select name="teacher" id="teacher" class="form-control col-md-8">
				<?php foreach($teacher as $item):?>
					<option value="<?=$item['id']?>" <?=$item['id']==$courseinfo['teacher']?'selected':''?>><?=$item['name']?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="form-group row">
			<label for="price" class="col-md-2 col-form-label">Học phí:</label>
			<input type="number" step="1000" name="price" id="price" class="col-md-8 form-control" value="<?=$courseinfo['price']?>">
		</div>
		<div class="form-group row">
			<label for="duration" class="col-md-2 col-form-label">Thời lượng khóa học &#40;tháng&#41;:</label>
			<input type="number" step="1" name="duration" id="duration" class="col-md-8 form-control" value="<?=$courseinfo['duration']?>">
		</div>
		<div class="form-group row">
			<label for="status" class="col-md-2 col-form-label">Hiển thị khóa học:</label>
			<select name="status" id="status" class="form-control col-md-8">
					<option value="1" <?=$courseinfo['status'] == 1? 'selected':''?>>Có</option>
					<option value="0" <?=$courseinfo['status'] == 0? 'selected':''?>>Không</option>
			</select>
		</div>
		<div class="form-group row">
			<label for="courseDescription" class="col-md-2 col-form-label">Mô tả khóa học:</label>
			<textarea name="description" id="courseDescription" cols="30" rows="10"><?=$courseinfo['description']?></textarea>
			<script>CKEDITOR.replace('courseDescription')</script>
		</div>
		<button type="submit" name="editCourse" class="btn btn-primary">Cập nhật thông tin</button>
		<a href="?request=course" class="btn btn-light">Trở về</a>
	</form>
</div>