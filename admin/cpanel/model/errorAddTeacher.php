<?php if (isset($_SESSION['addDup']) && $_SESSION['addDup'] == true) : ?>
	<div class="alert alert-danger">Giảng viên cần thêm đã có trong hệ thống</div>
	<?php unset($_SESSION['addDup']) ?>
<?php elseif (isset($_SESSION['addFailed']) && $_SESSION['addFailed'] == true) : ?>
	<div class="alert alert-danger">Đã có lỗi xảy ra, vui lòng thử lại trong giây lát</div>
	<?php unset($_SESSION['addFailed']) ?>
<?php endif; ?>