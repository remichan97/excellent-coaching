<?php
	include "../cpanel/model/database.php";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$cat = "select catName from category where catID = '$id'";
		$name = mysqli_query($conn,$cat);
		$name = mysqli_fetch_array($name);
	}
?>
<?php include "../cpanel/controller/editCategory.php"?>
<div class="editCategory">
	<h3>Chỉnh sửa danh mục</h3>
	<form method="post">
		<div class="form-group row">
			<label for="newCatName" class="col-form-label col-md-2">Tên danh mục mới:</label>
			<input type="text" name="newCatName" value="<?=$name['catName']?>" class="form-control col-md-3">
		</div>
		<button type="submit" name="editCategory" class="btn btn-primary">Đổi tên</button>
		<?php if(mysqli_num_rows(mysqli_query($conn,"select*from course where catID = '$id'")) == 0):?>
			<button type="submit" name="deleteCategory" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa danh mục này?')">Xóa danh mục</button>
		<?php endif;?>
		<a href="?request=category" class="btn btn-light"> Trở về</a>
	</form>
</div>