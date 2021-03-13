<?php if (isset($_SESSION['added']) && $_SESSION['added'] == true) : ?>
	<div class="alert alert-success">Đã thêm thông tin giảng viên</div>
	<?php unset($_SESSION['added']) ?>
<?php elseif (isset($_SESSION['completed']) && $_SESSION['completed'] == true) : ?>
	<div class="alert alert-success">Đã xóa thông tin giảng viên</div>
	<?php unset($_SESSION['completed']) ?>
<?php elseif (isset($_SESSION['updated']) && $_SESSION['updated'] == true) : ?>
	<div class="alert alert-success">Cập nhật thông tin giảng viên thành công</div>
	<?php unset($_SESSION['updated']) ?>
<?php endif; ?>