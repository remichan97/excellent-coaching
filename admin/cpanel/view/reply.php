<?php
	include "../cpanel/model/database.php";
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	$sql = "select email from feedback where id = ".$id;
	$q = mysqli_query($conn,$sql);
	$q = mysqli_fetch_array($q);
}
?>

<?php include "../cpanel/controller/replymessage.php"?>
<div class="reply">
<h1>Gửi phản hồi</h1>
<?php if(isset($_SESSION['failed']) && $_SESSION['failed'] == true):?>
	<div class="alert alert-danger">Xin lỗi, đã có lỗi xảy ra, vui lòng thử lại trong giây lát</div>
<?php endif;?>
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
			<a href="?request=feedback" class="btn btn-light">Trở về</a>
		</div>
	</form>
</div>