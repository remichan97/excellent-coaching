<?php if (isset($_SESSION['addDuplicate']) && $_SESSION['addDuplicate'] == true) : ?>
	<div class="alert alert-danger">There is a category with the name you typed</div>
	<?php unset($_SESSION['addDuplicate']) ?>
<?php elseif (isset($_SESSION['addedCategory']) && $_SESSION['addedCategory'] == true) : ?>
	<div class="alert alert-success">New category added</div>
	<?php unset($_SESSION['addedCategory']) ?>
<?php elseif (isset($_SESSION['editDuplicate']) && $_SESSION['editDuplicate'] == true) : ?>
	<div class="alert alert-danger">There is a category with the name you typed!</div>
	<?php unset($_SESSION['editDuplicate']) ?>
<?php elseif (isset($_SESSION['editedCategory']) && $_SESSION['editedCategory'] == true) : ?>
	<div class="alert alert-success">Edited category name</div>
	<?php unset($_SESSION['editedCategory']) ?>
<?php elseif (isset($_SESSION['deleteFail']) && $_SESSION['deleteFail'] == true) : ?>
	<div class="alert alert-danger">Something went wrong, please try again later</div>
	<?php unset($_SESSION['deleteFail']) ?>
<?php elseif (isset($_SESSION['deletedCat']) && $_SESSION['deletedCat'] == true) : ?>
	<div class="alert alert-success">Deleted a category</div>
	<?php unset($_SESSION['deletedCat']) ?>
<?php endif; ?>