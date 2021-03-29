<?php if(isset($_SESSION['invalidFile']) && $_SESSION['invalidFile'] == true):?>
		<div class="alert alert-danger">The uploaded file is not an image!</div>
		<?php unset($_SESSION['invalidFile'])?>
		<?php elseif(isset($_SESSION['error']) && $_SESSION['error'] == true):?>
			<div class="alert alert-danger">Something went wrong, please try again later</div>
			<?php unset($_SESSION['error'])?>
	<?php endif;?>