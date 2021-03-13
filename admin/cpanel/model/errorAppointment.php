<?php if (isset($_SESSION['notinvited']) && $_SESSION['notinvited'] == true) : ?>
	<p class="alert alert-danger">Không thể gửi thông tin cho học viên vào lúc này, vui lòng thử lại sau</p>
	<?php unset($_SESSION['notinvited']) ?>
<?php elseif (isset($_SESSION['dup']) && $_SESSION['dup'] == true) : ?>
	<p class="alert alert-danger">Thời gian thay thế trùng với thời gian ban đầu</p>
	<?php unset($_SESSION['dup']) ?>
<?php elseif (isset($_SESSION['past']) && $_SESSION['past'] == true) : ?>
	<p class="alert alert-danger">Không thể đặt lịch hẹn trước ngày học viên đăng ký</p>
	<?php unset($_SESSION['past']) ?>
<?php endif; ?>