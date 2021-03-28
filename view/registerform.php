<?php include "../controller/courseregister.php" ?>

<div class="register">
	<h4>Bạn sẽ tham gia khóa học này!</h4>
	<p>Vui lòng dành chút thời gian để điền một số thông tin dưới đây, và chúng tôi sẽ thông báo cho bạn thời gian cụ thể bạn cần đến trung tâm để hoàn tất hồ sơ đăng ký</p>
	<form method="POST" class="row g-3 needs-validation" novalidate>
		<div class="col-md-4">
			<label for="name" class="form-label">Họ và tên</label>
			<input type="text" name="name" id="name" class="form-control" required="required">
			<div class="invalid-feedback">Thông tin bắt buộc</div>
		</div>
		<div class="col-md-4">
			<label for="email" class="form-label">Địa chỉ Email</label>
			<input type="email" name="email" id="email" class="form-control" required="required">
			<div class="invalid-feedback">Thông tin bắt buộc</div>
		</div>
		<div class="col-md-4">
			<label for="name" class="form-label">Số điện thoại</label>
			<input type="text" name="phone" id="phone" class="form-control" required="required" pattern="0[0-9]+" maxlength="11">
			<div class="invalid-feedback">Thông tin bắt buộc</div>
		</div>
		<div class="col-12">
			<label for="address" class="form-label">Địa chỉ: </label>
			<input type="text" name="address" id="address" class="form-control" required>
			<div class="invalid-feedback">Thông tin bắt buộc</div>
		</div>
		<div class="col-12">
			<label for="centre" class="form-label">Bạn sẽ tham gia khóa học tại cơ sở nào?</label>
			<select name="centre" id="centre" class="form-control" required>
				<option value="" hidden>Chọn một cơ sở...</option>
				<?php foreach($a as $cen):?>
					<option value="<?=$cen['addID']?>"><?=$cen['address']?></option>
				<?php endforeach;?>
			</select>
			<div class="invalid-feedback">Vui lòng chọn một trung tâm bạn muốn tham gia khóa học</div>
		</div>
		<div class="col-12">
			<label for="ref" class="form-label">Bạn biết đến chúng tôi thông qua kênh truyền thông nào?</label>
			<select name="ref" id="ref" required class="form-control">
				<option value="" hidden>Chọn một kênh truyền thông...</option>
				<option value="Facebook">Facebook</option>
				<option value="Google">Tìm kiếm trên Google</option>
				<option value="Kênh truyền thông khác">Khác</option>
			</select>
			<div class="invalid-feedback">Vui lòng chọn một kênh truyền thông</div>
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-primary" name="submit">Gửi đăng ký</button>
		</div>
	</form>
</div>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>