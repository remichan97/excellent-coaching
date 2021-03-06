<?php if (isset($_SESSION['success']) && $_SESSION['success'] == true) : ?>
	<p class="alert alert-success">Thông tin của bạn đã được lưu trên hệ thống. Chúng tôi đã gửi một email xác nhận trong email của bạn.</p>
	<?php unset($_SESSION['success']) ?>
<?php elseif (isset($_SESSION['failed']) && $_SESSION['failed'] == true) : ?>
	<p class="alert alert-danger">Rất tiếc, đã có lỗi xảy ra, vui lòng thử lại trong ít phút nữa</p>
	<?php unset($_SESSION['failed']) ?>
<?php elseif (isset($_SESSION['invalidemail']) && $_SESSION['invalidemail'] == true) : ?>
	<p class="alert alert-warning">Email nhập vào không hợp lệ, vui lòng kiểm tra lại!</p>
	<?php unset($_SESSION['invalidemail']) ?>
<?php endif; ?>