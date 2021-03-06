<?php if (isset($_SESSION['sent']) && $_SESSION['sent'] == true) : ?>
	<p class="alert alert-success">Cảm ơn bạn đã liên hệ với chúng tôi, chúng tôi sẽ trả lời phản hồi của bạn trong thời gian sớm nhất.</p>
	<?php unset($_SESSION['sent']) ?>
<?php elseif (isset($_SESSION['failed']) && $_SESSION['failed'] == true) : ?>
	<p class="alert alert-danger">Rất tiếc, đã có lỗi xảy ra, vui lòng thử lại trong ít phút nữa</p>
	<?php unset($_SESSION['failed']) ?>
<?php elseif (isset($_SESSION['invalidemail']) && $_SESSION['invalidemail'] == true) : ?>
	<p class="alert alert-warning">Email nhập vào không hợp lệ, vui lòng kiểm tra lại!</p>
	<?php unset($_SESSION['invalidemail']) ?>
<?php endif; ?>