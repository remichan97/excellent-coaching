<?php
	include "./controller/sendmessage.php"
?>

<div class="content_academy_wrap">
	<div class="content_academy_inner">
		<div class="contact">
			<?php include "./view/contactstatus.php"?>
			<h2>Bạn đang liên hệ với chúng tôi!</h2>
			<p>Bạn có thắc mắc cần được giải đáp, hoặc có đề xuất cho chúng tôi? Hãy cho chúng tôi biết ý kiến của bạn thông qua biểu mẫu dưới đây!</p>
			<form method="POST">
				<div class="form-row">
					<div class="form-group col-md-6">
					<label for="email">Email:</label>
					<input type="text" id="email" name="email" required="required" class="form-control" required>
					</div>
					<div class="form-group col-md-6">
					<label for="subject">Tiêu đề:</label>
					<input type="text" id="subject" name="subject" required="required" class="form-control" required>
					</div>
					<div class="form-group col-md">
					<label for="body">Nội dung tin nhắn</label>
					<textarea name="body" id="body" class="form-control" cols="30" rows="10" required></textarea>
					</div>
				</div>
				<button type="submit" class="btn btn-primary" name='sendmsg'>Gửi phản hồi</button>
			</form>
		</div>
	</div>
</div>