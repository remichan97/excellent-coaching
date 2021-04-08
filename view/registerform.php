<?php include "../controller/courseregister.php" ?>

<div class="register">
	<h4>You're registering!</h4>
	<p>Please take a few moment to fill out the form below. We will reach out to you to give you the time that you need to come to the centre of your choice to complete your registration</p>
	<form method="POST" class="row g-3 needs-validation" novalidate>
		<div class="col-md-4">
			<label for="name" class="form-label">Your full name</label>
			<input type="text" name="name" id="name" class="form-control" required="required">
			<div class="invalid-feedback">Required</div>
		</div>
		<div class="col-md-4">
			<label for="email" class="form-label">Your email address</label>
			<input type="email" name="email" id="email" class="form-control" required="required">
			<div class="invalid-feedback">Required</div>
		</div>
		<div class="col-md-4">
			<label for="name" class="form-label">Your phone number</label>
			<input type="text" name="phone" id="phone" class="form-control" required="required" pattern="0[0-9]+" maxlength="11">
			<div class="invalid-feedback">Required</div>
		</div>
		<div class="col-12">
			<label for="address" class="form-label">Your home address</label>
			<input type="text" name="address" id="address" class="form-control" required>
			<div class="invalid-feedback">Required</div>
		</div>
		<div class="col-12">
			<label for="centre" class="form-label">Which of our centre would you like to enroll to?</label>
			<select name="centre" id="centre" class="form-control" required>
				<option value="" hidden>Select a centre...</option>
				<?php foreach($a as $cen):?>
					<option value="<?=$cen['addID']?>"><?=$cen['address']?></option>
				<?php endforeach;?>
			</select>
			<div class="invalid-feedback">Please select a centre you would like to enroll to</div>
		</div>
		<div class="col-12">
			<label for="ref" class="form-label">How do you know about us?</label>
			<select name="ref" id="ref" required class="form-control">
				<option value="" hidden>Choose one...</option>
				<option value="Facebook">Facebook</option>
				<option value="Google">Google search</option>
				<option value="Other media channel">Other</option>
			</select>
			<div class="invalid-feedback">Please choose one of the option above</div>
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-primary" name="submit">Send my registration</button>
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