<?php if(isset($_SESSION['invalidFile']) && $_SESSION['invalidFile'] == true):?>
		<div class="alert alert-danger">File đã chọn không phải file ảnh!</div>
		<?php unset($_SESSION['invalidFile'])?>
		<?php elseif(isset($_SESSION['error']) && $_SESSION['error'] == true):?>
			<div class="alert alert-danger">Đã có lỗi xảy ra, vui lòng thử lại sau</div>
			<?php unset($_SESSION['error'])?>
	<?php endif;?>