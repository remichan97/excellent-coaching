<?php if(isset($_SESSION['addDuplicate']) && $_SESSION['addDuplicate'] == true):?>
	<div class="alert alert-danger">Không thể thêm lại danh mục đã có sẵn!</div>
	<?php unset($_SESSION['addDuplicate'])?>
	<?php elseif(isset($_SESSION['addedCategory']) && $_SESSION['addedCategory'] == true):?>
		<div class="alert alert-success">Đã thêm danh mục mới</div>
		<?php unset($_SESSION['addedCategory'])?>
		<?php elseif(isset($_SESSION['editDuplicate']) && $_SESSION['editDuplicate'] == true):?>
			<div class="alert alert-danger">Tên danh mục đã tôn tại!</div>
			<?php unset($_SESSION['editDuplicate'])?>
			<?php elseif(isset($_SESSION['editedCategory']) && $_SESSION['editedCategory'] == true):?>
				<div class="alert alert-success">Đã sửa tên danh mục</div>
				<?php unset($_SESSION['editedCategory'])?>
<?php endif;?>