<?php 
	include "../cpanel/model/database.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysqli_query($conn,"select*from teacher where id = '$id'");
		$teacher = mysqli_fetch_array($query);
	}
?>

<?php include "../cpanel/controller/updateTeacher.php"?>
<div class="updateTeacher">
	<?php include "../cpanel/model/errorUpdateTeacher.php"?>
	<h3>Sửa thông tin giảng viên</h3>
	<form method="post" enctype="multipart/form-data">
		<div class="form-group row">
		<label for="name" class="col-md-2 col-form-label">Tên giảng viên:</label>
		<input type="text" name="name" id="name" value="<?=$teacher['name']?>" class="form-control col-md-7">
		</div>
		<div class="form-group row">
		<label for="name" class="col-md-2 col-form-label">Ảnh hiện tại của giảng viên</label>
		<?php if($teacher['photo']):?>
			<div class="col-md-7">
				<img src="../assets/img/<?=$teacher['photo']?>">
			</div>
			<?php else:?>
				<div class="col-md-7 col-form-label">Chưa có ảnh giảng viên</div>
		<?php endif;?>
		</div>
		<div class="form-group row">
			<label for="image" class="col-md-2 col-form-label">Chọn ảnh mới:</label>
			<input type="file" name="image" id="image" class="form-control-file col-md-7" required accept="image/jpeg, image/png">
		</div>
		<div class="form-group row">
			<label for="info" class="col-md-2 col-form-label">Thông tin về giảng viên:</label>
			<textarea name="info" id="info" cols="30" rows="10">
				<?=$teacher['description']?>
			</textarea>
			<script>CKEDITOR.replace('info')</script>
		</div>
		<button type="submit" class="btn btn-primary" name="updateTeacher">Cập nhật</button>
		<a href="?request=teacher" class="btn btn-light">Trở về</a>
	</form>
</div>