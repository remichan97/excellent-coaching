<?php if (isset($_SESSION['courseEdited']) && $_SESSION['courseEdited'] == true) : ?>
	<div class="alert alert-success">Cập nhật thông tin thành công!</div>
	<?php unset($_SESSION['courseEdited']) ?>
<?php elseif (isset($_SESSION['courseDeleted']) && $_SESSION['courseDeleted'] == true) : ?>
	<div class="alert alert-success">Đã xóa khóa học</div>
	<?php unset($_SESSION['courseDeleted']) ?>
<?php elseif (isset($_SESSION['courseAdded']) && $_SESSION['courseAdded'] == true) : ?>
	<div class="alert alert-success">Đã thêm khóa học thành công!</div>
	<?php unset($_SESSION['courseAdded']) ?>
<?php endif; ?>