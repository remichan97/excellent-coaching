<?php if(isset($_SESSION['notMatch']) && $_SESSION['notMatch'] == true):?>
	<div class="alert alert-danger">Mật khẩu cũ không đúng!</div>
	<?php unset($_SESSION['notMatch'])?>
	<?php elseif(isset($_SESSION['prePassword']) && $_SESSION['prePassword'] == true):?>
		<div class="alert alert-danger">Bạn không thể sử dụng lại mật khẩu cũ!</div>
		<?php unset($_SESSION['prePassword'])?>

<?php endif;?>