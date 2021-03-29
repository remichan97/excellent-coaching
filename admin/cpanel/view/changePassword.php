<?php include "../cpanel/controller/changePassword.php"?>

<div class="changePassword">
	<?php include "../cpanel/model/wrongPassword.php"?>
	<h3>Change Administrative Password</h3>
	<form method="post" oninput="retypePassword.setCustomValidity(newPassword.value!=retypePassword.value?'Password does not match':'')">
		<div class="form-group row">
			<label for="oldPassword" class="col-md-2 col-form-label">Current Password: </label>
			<input type="password" name="oldPassword" id="oldPassword" class="col-md-3 form-control" required>
		</div>
		<div class="form-group row">
			<label for="newPassword" class="col-md-2 col-form-label">New Password: </label>
			<input type="password" name="newPassword" id="newPassword" class="col-md-3 form-control" min="6" max="20" pattern="[A-Za-z0-9]+" required aria-describedby="pwhelp">
			<small id="pwhelp" class="form-text text-muted">&nbsp;&nbsp;Password cannot contain special character</small>
		</div>
		<div class="form-group row">
			<label for="retypePassword" class="col-md-2 col-form-label">Retype new password: </label>
			<input type="password" name="retypePassword" id="retypePassword" class="col-md-3 form-control" required>
		</div>
		<input type="submit" name="changePassword" class="btn btn-primary" value="Change Password">
		<a href="<?=$_SERVER['HTTP_REFERER']?>" class="btn btn-light">Go back</a>
	</form>
</div>