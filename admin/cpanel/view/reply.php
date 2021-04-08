<?php
include "./model/database.php";
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "select email from feedback where id = " . $id;
	$q = mysqli_query($conn, $sql);
	$q = mysqli_fetch_array($q);
}
?>

<div class="reply">
	<h1>Send a reply</h1>
	<?php if (isset($_SESSION['failed']) && $_SESSION['failed'] == true) : ?>
		<div class="alert alert-danger">Something went wrong, please try again later</div>
	<?php endif; ?>
	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">To:</label>
				<input type="text" name="email" id="email" readonly class="form-control-plaintext" value="<?= $q['email'] ?>">
			</div>
			<div class="form-group col-md-6">
				<label for="subject">Subject:</label>
				<input type="text" name="subject" id="subject" class="form-control" required>
			</div>
			<div class="form-group col-md-12">
				<label for="body">Your message:</label>
				<textarea name="msg" id="msg" cols="30" rows="10" class="form-control" required>
				</textarea>
				<script>
					CKEDITOR.replace('msg')
				</script>
			</div>
			<button type="submit" name="send" class="btn btn-primary">Send</button>
			<a href="?request=feedback" class="btn btn-light">Go back</a>
		</div>
	</form>
	<?php include "../cpanel/controller/replymessage.php" ?>
</div>