<div class="register">
	<h4>Bạn sẽ tham gia khóa học này!</h4>
	<form method="POST">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="name">Họ và tên:</label><input type="text" id="name" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="email">Email:</label><input type="text" id="email" class="form-control">
			</div>
			<div class="form-group col-md-4">
				<label for="phone">Số điện thoại:</label><input type="tel" id="phone" class="form-control" pattern="^0[0-9]+">
			</div>
			<div class="form-group col-md-12">
				<label for="home">Địa chỉ:</label><input type="text" id="home" class="form-control">
			</div>
			<div class="form-group col-md-12">
				<label for="address">Bạn sẽ tham gia khóa học này ở cơ sở: </label>
				<select id="addresss" class="form-control" required>
					<option hidden>Chọn một cơ sở...</option>
					<?php foreach($a as $i):?>
					<option value="<?=$i['addID']?>"><?=$i['address']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group col-md">
				<label for="ref">Bạn biết đến chúng tôi thông qua kênh truyền thông nào:</label>
				<select id="ref" class="form-control">
					<option hidden>Chọn một hình thức...</option>
					<option value="Facebook">Facebook</option>
					<option value="Google">Tìm kiếm trên Google</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
		</div>
		<input type="submit" class="btn btn-primary">Gửi đăng ký</input>
	</form>
</div>