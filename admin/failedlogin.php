<?php if(isset($_SESSION['failed']) && $_SESSION['failed'] == true):?>
	<p class="alert alert-danger">Vui lòng kiểm tra lại tên đăng nhập hoặc mật khẩu!</p>
	<?php unset($_SESSION['failed'])?>
	<?php elseif(isset($_SESSION['pwChanged']) && $_SESSION['pwChanged'] == true):?>
		<p class="alert alert-primary">Đã thay đổi mật khẩu, vui lòng đăng nhập lại!</p>
		<?php unset($_SESSION['pwChanged'])?>
<?php endif;?>