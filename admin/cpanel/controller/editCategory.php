<?php
	if (isset($_POST['editCategory'])) {
		$_SESSION['editCategory'] = $_POST;
		$editCat = $_POST['newCatName'];
		$checkDup = "select*from category where catName = '$editCat'";
		if (mysqli_num_rows(mysqli_query($conn,$checkDup)) == 1) {
			unset($_SESSION['editCategory']);
			$_SESSION['editDuplicate'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		} else {
			mysqli_query($conn,"update category set catName = '$editCat' where catID = '$id'");
			unset($_SESSION['editDuplicate']);
			$_SESSION['editedCategory'] = true;
			header("Location: "."../cpanel?request=category");
		}
		exit();
	} else if (isset($_POST['deleteCategory'])) {
		$_SESSION['deleteCategory'] = $_POST;
		$delete = "delete from category where catID = '$id'";
		mysqli_query($conn,$delete);
		if (mysqli_affected_rows($conn) == 1) {
			unset($_SESSION['deleteCategory']);
			$_SESSION['deletedCat'] = true;
			header("Location: "."../cpanel?request=category");
		} else {
			unset($_SESSION['deleteCategory']);
			$_SESSION['deleteFail'] = true;
			header("Location: ".$_SERVER['REQUEST_URI']);
		}
		exit();
	}
?>