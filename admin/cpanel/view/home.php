<?php include "../cpanel/controller/homeStats.php" ?>

<div class="home">
	<h3>Hiện tại trong cơ sở dữ liệu đang có:</h3>
	<div class="row">
		<div class="col-sm-3">
			<div class="card border-primary">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/database.png" /> <a href="?request=course"><?= $course ?> khóa học</a> và <a href="?request=category"><?= $category ?> danh mục</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-success">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/guest-male.png" /> <a href="?request=teacher"><?= $teacher ?> giảng viên</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-primary">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/48/000000/calendar.png"/> <a href="?request=appointment"><?= $calendar ?> đăng ký mới chưa đặt lịch hẹn</a></p>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="card border-info">
				<div class="card-body">
					<p class="card-text"><img src="https://img.icons8.com/fluent/50/000000/email-open.png"/> <a href="?request=feedback"><?= $feedback ?> phản ánh khách hàng chưa phản hồi</a></p>
				</div>
			</div>
		</div>
	</div>
	<br>
	<p>Nhấn vào các đường dẫn để đến các trang quản lý tương ứng.</p>
</div>