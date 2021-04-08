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
	<h3>Edit category</h3>
	<form method="post">
		<div class="form-group row">
			<label for="newCatName" class="col-form-label col-md-2">New category name:</label>
			<input type="text" name="newCatName" value="<?=$name['catName']?>" class="form-control col-md-3">
		</div>
		<button type="submit" name="editCategory" class="btn btn-primary">Rename</button>
		<?php if(mysqli_num_rows(mysqli_query($conn,"select*from course where catID = '$id'")) == 0):?>
			<button type="submit" name="deleteCategory" class="btn btn-danger" onclick="return confirm('Do you want to delete the course?')">Delete</button>
		<?php endif;?>
		<a href="?request=category" class="btn btn-light"> Go back</a>
	</form>
</div>