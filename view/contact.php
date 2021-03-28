<?php
	include "./controller/sendmessage.php"
?>

<div class="content_academy_wrap">
	<div class="content_academy_inner">
		<div class="contact">
			<?php include "./view/contactstatus.php"?>
			<h2>Bạn đang liên hệ với chúng tôi!</h2>
			<p>Bạn có thắc mắc cần được giải đáp, hoặc có đề xuất cho chúng tôi? Hãy cho chúng tôi biết ý kiến của bạn thông qua biểu mẫu dưới đây!</p>
			<form method="POST" class="needs-validation" novalidate>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="email">Email của bạn:</label>
					<input type="text" id="email" name="email" required="required" class="form-control" required>
					<div class="invalid-feedback">Vui lòng điền email của bạn</div>
					</div>
					<div class="form-group col-md-6">
					<label for="subject">Tiêu đề:</label>
					<input type="text" id="subject" name="subject" required="required" class="form-control" required>
					<div class="invalid-feedback">Vui lòng điền tiêu đề tin nhắn</div>
					</div>
					<div class="form-group col-md">
					<label for="body">Nội dung tin nhắn:</label>
					<textarea name="body" id="body" class="form-control" cols="30" rows="10" required></textarea>
					<div class="invalid-feedback">Vui lòng điền nội dung tin nhắn</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name='sendmsg'>Gửi phản hồi</button>
			</form>
		</div>
	</div>
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