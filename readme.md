# Chào mừng
Đây là repo của project đầu tiên tại Aptech, với đề tài là xây dựng một website giới thiệu khóa học của trung tâm tên Excellent Coaching. <br />
## Ngôn ngữ sử dụng
Ngôn ngữ chính của website là HTML5, CSS3, PHP và một chút Javascript (cụ thể là JQuery).
# Các chức năng hiện tại của website
Với khách hàng/học viên:
- Xem, tìm kiếm các khóa học tại trung tâm (có thể tìm kiếm theo tên khóa học hoặc các từ khóa trong nội dung khóa học)
- Đăng ký các khóa học bằng các biểu mẫu được đặt tại các trang thông tin khóa học
- Xem các thông tin về giảng viên tại trung tâm
- Gửi phản hồi cho trung tâm
- In hoặc lưu thành file pdf các thông tin về khóa học và hoặc bảng giá khóa học
- Gửi thông tin phản hồi cho trung tâm

Với quản trị viên:
- Đăng nhập, đăng xuất trang quản trị (tên đăng nhập và mật khẩu có trong file sql đặt tại thư mục `database` của repo)
- Quản lý các danh mục khóa học, thông tin khóa học, thông tin giảng viên
- Đặt lịch hẹn đến trung tâm cho học viên đăng ký khóa học
- Trả lời phản hồi của khách hàng/học viên (thông qua email)
- Đổi mật khẩu tài khoản quản trị
# Cài đặt
Các hướng dẫn dưới đây sẽ giả sử rằng máy tính cá nhân đã được cài đặt XAMPP. Nếu hệ thống chưa cài đặt ứng dụng đó, vui lòng căi đặt [XAMPP](https://www.apachefriends.org/index.html) trước khi thực hiện tiếp các thao tác phía dưới. Ngoài ra các hướng dẫn dưới đây sẽ được thực hiện trên hệ điều hành Windows<br />
Sau khi đã cài đặt XAMPP, bạn hãy `clone` repo này vào folder `htdocs` của XAMPP, và bạn sẽ cần thiết lập một số chức năng trong XAMPP để đăm bảo project hoạt động bình thường.
## Thiết lập chức năng sendmail của XAMPP
Để khả năng gửi email của project có thể hoạt động, bạn cần sửa hai tập tin sau của XAMPP:
### Tập tin `php.ini` đặt tại thư mục `\XAMPP\php\php.ini`
Ở tập tin này bạn tìm đến dòng `sendmail_path=` tại phần `[mail function]` của tập tin, và điền vào dòng đó đường dẫn đến chương trình sendmail.exe của XAMPP như sau:
``` ini
sendmail_path = "\"phân_vùng_ổ_cài_xampp:\xampp\sendmail\sendmail.exe" -t"
```
Ví dụ XAMPP được cài ở phân vùng D của máy tính, bạn nhập vào như sau:
``` ini 
sendmail_path = "\"D:\xampp\sendmail\sendmail.exe" -t"
```
### Tập tin `sendmail.ini` đặt tại thư mục `\XAMPP\sendmail\sendmail.ini`
Ở tập tin này bạn điền các giá trị như sau:
``` ini
smtp_server = server_smtp_của_dịch_vụ_email_mong_muốn
smtp_port = cổng_smtp_của_dịch_vụ_email_mong_muốn
smtp_ssl = auto
auth_username = email_đầy_đủ
auth_password = mật_khẩu_đăng_nhập
```
*Lưu ý: khi điền mật khẩu đăng nhập email, vui lòng sử dụng App Password thay vì mật khẩu thông thường, nếu không quá trình gửi email sẽ thất bại với thông báo lỗi username and password not accepted (thông báo lỗi này không xuất hiện khi gửi email trên project nhưng sẽ có trong log của sendmail)*<br />
Sau khi đã thay đổi các file trên, bạn cần khởi động lại Apache để thay đổi có hiệu lực
## Thiết lập host ảo (Virtual Host) trong XAMPP
Project này được xây dựng để tận dụng khả năng Virtual Host của XAMPP, vì vậy để tận dụng Virtual Host, bạn cần sửa hai tập tin sau
### Tập tin `https-vhost.conf` trong thư mục `XAMPP\apache\conf\extra`
Ở tập tin này bạn thêm vào các dòng sau đây
``` xml
<VirtualHost *:80>
DocumentRoot "phân_vùng_ổ_cài_XAMPP:\xampp\htdocs\excellent-coaching"
ServerName excellentcoaching.com.vn
</VirtualHost>
```
Ghi chú:
- Giá trị 80 ở thẻ mở `VirtualHost` là cổng mặc định của Apache, bạn có thể thay đổi sao cho phù hợp với cấu hình của bạn
- Giá trị ServerName là tên miền website ảo mong muốn, bận có thể đặt tùy ý, ở đây sẽ sử dụng tên miền liên quan đến Excellent Coaching.
### Tập tin `hosts` của Windows đặt ở `C:\windows\system32\drivers\etc`
Ghi chú: để có thể chỉnh sửa được file này, bạn cần mở file này bằng quyền admin (chạy editor bằng quyền admin sau đó mở file lên) hoặc là thực hiện thao tác `Take Ownership` thì mới có thể sửa được file. <br />
Ở file này bạn thêm vào dòng sau:
```
127.0.0.1			excellentcoaching.com.vn
```
Tương tự như trên, sau khi đã thay đổi các file, bạn cần khởi động lại Apache để các thay đổi có hiệu lực<br />
Cuối cùng, để truy cập vào Project, bạn mở trình duyệt web lên và truy cập vào tên miền đã đặt ở phía trên để kiểm tra<br />
*Lưu ý: Nếu bạn đã thay đổi cổng của Apache, sau khi đã thực hiện các thay đổi ở trên, bạn truy cập vào Project theo dạng `tên_miền:cổng_apache_của_bạn`*
