<?php
	if (isset($_POST['editCategory'])) {
		$_SESSION['editCategory'] = $_POST;
		$editCat = $_POST['catName'];
		$editID = $_POST['catID'];
		$checkDup = "select*from category where catName = '$editCat'";
		if (mysqli_num_rows(mysqli_query($conn,$checkDup)) == 1) {
			unset($_SESSION['editCategory']);
			$_SESSION['editDuplicate'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			mysqli_query($conn,"update category set catName = '$editCat' where catID = '$editID'");
			unset($_SESSION['editDuplicate']);
			$_SESSION['editedCategory'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>
<div class="edit">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?=$item['catID']?>">
		Sửa
	</button>
</div>

<!-- Modal -->
<div class="modal fade" id="editModal<?=$item['catID']?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">Sửa danh mục khóa học</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group">
						<label for="catName" class="form-label">Nhập tên danh mục mới</label>
						<input type="text" name="catName" id="catName" class="form-control" required="required" value="<?=$item['catName']?>">
						<input type="hidden" name="catID" value="<?=$item['catID']?>">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="editCategory">Sửa</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>