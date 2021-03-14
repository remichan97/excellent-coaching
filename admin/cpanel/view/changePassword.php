<?php include "../cpanel/controller/changePassword.php"?>

<div class="changePassword">
	<?php include "../cpanel/model/wrongPassword.php"?>
	<h3>Đổi mật khẩu quản trị</h3>
	<form method="post" oninput="retypePassword.setCustomValidity(newPassword.value!=retypePassword.value?'Không khớp mật khẩu':'')">
		<div class="form-group row">
			<label for="oldPassword" class="col-md-2 col-form-label">Mật khẩu cũ: </label>
			<input type="password" name="oldPassword" id="oldPassword" class="col-md-3 form-control" required>
		</div>
		<div class="form-group row">
			<label for="newPassword" class="col-md-2 col-form-label">Mật khẩu mới: </label>
			<input type="password" name="newPassword" id="newPassword" class="col-md-3 form-control" min="6" max="20" pattern="[A-Za-z0-9]+" required aria-describedby="pwhelp">
			<small id="pwhelp" class="form-text text-muted">&nbsp;&nbsp;Mật khẩu không được chứa các ký tự đặc biệt</small>
		</div>
		<div class="form-group row">
			<label for="retypePassword" class="col-md-2 col-form-label">Nhập lại mật khẩu: </label>
			<input type="password" name="retypePassword" id="retypePassword" class="col-md-3 form-control" required>
		</div>
		<input type="submit" name="changePassword" class="btn btn-primary" value="Đổi mật khẩu">
		<a href="<?=$_SERVER['HTTP_REFERER']?>" class="btn btn-light">Trở về</a>
	</form>
</div>