<?php include "./controller/courseregister.php"?>

<div class="register">
	<h4>Bạn sẽ tham gia khóa học này!</h4>
	<p>Vui lòng dành chút thời gian để điền một số thông tin dưới đây, và chúng tôi sẽ thông báo cho bạn thời gian cụ thể bạn cần đến trung tâm để hoàn tất hồ sơ đăng ký</p>
	<form method="POST">
		<div class="form-row">
			<div class="form-group col-md-4">
				<label for="name">Họ và tên:</label><input type="text" name='name' id="name" class="form-control" required>
			</div>
			<div class="form-group col-md-4">
				<label for="email">Email:</label><input type="text" id="email" class="form-control" name='email' required>
			</div>
			<div class="form-group col-md-4">
				<label for="phone">Số điện thoại:</label><input type="tel" id="phone" class="form-control" name='phone' pattern="^0[0-9]+" required>
			</div>
			<div class="form-group col-md-12">
				<label for="home">Địa chỉ:</label><input type="text" name='address' id="home" class="form-control" required>
			</div>
			<div class="form-group col-md-12">
				<label for="address">Bạn sẽ tham gia khóa học này ở cơ sở: </label>
				<select id="addresss" name='centre' class="form-control" required>
					<option value="" hidden>Chọn một cơ sở...</option>
					<?php foreach($a as $i):?>
					<option value="<?=$i['addID']?>"><?=$i['address']?></option>
					<?php endforeach;?>
				</select>
			</div>
			<div class="form-group col-md">
				<label for="ref">Bạn biết đến chúng tôi thông qua kênh truyền thông nào:</label>
				<select id="ref" class="form-control" name="ref" required>
					<option hidden>Chọn một hình thức...</option>
					<option value="Facebook">Facebook</option>
					<option value="Google">Tìm kiếm trên Google</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
		</div>
		<button type="submit" class="btn btn-primary" name="submit">Gửi đăng ký</button>
	</form>
</div>