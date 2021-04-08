<?php
	if (isset($_POST['addCategory'])) {
		$_SESSION['addCategory'] = $_POST;
		$newCat = $_POST['catName'];
		$checkDup = "select*from category where catName = '$newCat'";
		if (mysqli_num_rows(mysqli_query($conn,$checkDup)) == 1) {
			unset($_SESSION['addCategory']);
			$_SESSION['addDuplicate'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			mysqli_query($conn,"insert into category (catName) value ('$newCat')");
			unset($_SESSION['addDuplicate']);
			$_SESSION['addedCategory'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>

<div class="add">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Add a new category
	</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="post">
					<div class="form-group">
						<label for="catName" class="form-label">New category name</label>
						<input type="text" name="catName" id="catName" class="form-control" required="required">
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" name="addCategory">Add</button>
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>