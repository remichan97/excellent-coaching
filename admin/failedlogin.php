<?php if(isset($_SESSION['failed']) && $_SESSION['failed'] == true):?>
	<p class="alert alert-danger">Vui lòng kiểm tra lại tên đăng nhập hoặc mật khẩu!</p>
	<?php unset($_SESSION['failed'])?>
<?php endif;?>