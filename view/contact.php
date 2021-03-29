<?php
	include "./controller/sendmessage.php"
?>

<div class="content_academy_wrap">
	<div class="content_academy_inner">
		<div class="contact">
			<?php include "./view/contactstatus.php"?>
			<h2>You're reaching out to us!</h2>
			<p>Do you have a question? Or is there something you'd like to share with us? Please don't hesitate to contact us using the form below!</p>
			<form method="POST" class="needs-validation" novalidate>
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="email">Your email address</label>
					<input type="text" id="email" name="email" required="required" class="form-control" required>
					<div class="invalid-feedback" style="font-weight: bold;">Required</div>
					</div>
					<div class="form-group col-md-6">
					<label for="subject">Subject</label>
					<input type="text" id="subject" name="subject" required="required" class="form-control" required>
					<div class="invalid-feedback" style="font-weight: bold;">A message subject helps us understand you better!</div>
					</div>
					<div class="form-group col-md">
					<label for="body">Your message</label>
					<textarea name="body" id="body" class="form-control" cols="30" rows="10" required></textarea>
					<div class="invalid-feedback" style="font-weight: bold;">Please type in your message</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name='sendmsg'>Send my message</button>
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