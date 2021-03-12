<?php
	include "../cpanel/model/database.php";
	if(isset($_GET['id'])){
	$sql = "select email from feedback where id = ".$_GET['id'];
	$q = mysqli_query($conn,$sql);
	$q = mysqli_fetch_array($q);
}
?>
<div class="reply">
<h1>Gửi phản hồi</h1>
<script src="../cpanel/ckeditor/ckeditor.js"></script>
	<form method="post">
		<div class="form-row">
			<div class="form-group col-md-6">
				<label for="email">Đến:</label>
				<input type="text" name="email" id="email" readonly class="form-control-plaintext" value="<?=$q['email']?>">
			</div>
			<div class="form-group col-md-6">
				<label for="subject">Tiêu đề:</label>
				<input type="text" name="subject" id="subject" class="form-control" required>
			</div>
			<div class="form-group col-md-12">
				<label for="body">Nội dung tin nhắn:</label>
				<textarea name="msg" id="msg" cols="30" rows="10" class="form-control" required>
				</textarea>
				<script>CKEDITOR.replace('msg')</script>
			</div>
			<button type="submit" name="send" class="btn btn-primary">Gửi phản hồi</button>
		</div>
	</form>
</div>