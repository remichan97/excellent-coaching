# Chào mừng
Đây là code repository (quản lý phiên bản code, dưới đây sẽ gọi tắt là **repo**) của project PHP kỳ này. Repository này được chia làm hai nhánh:
 - Nhánh **main**: Đây là nhánh đầu tiên, và cũng là nhánh chính của code, nhánh này sẽ được sử dụng để lưu lại các đoạn code, các file đã hoàn chỉnh của Project (ví dụ như file Readme.md này,)
 - Nhánh **dev**: Đây sẽ là nhánh để mọi người sẽ code các chức năng, cũng như mọi thứ liên quan đến project này, toàn bộ các thay đổi sẽ được thực hiện qua nhánh dev này trước, sau khi đã có sự đồng thuận của nhóm, code ở đây sẽ được tiến hành ghép (merge) vào nhánh main để coi như phần đó đã hoàn chỉnh.

# Bắt đầu làm việc với code
Dưới đây là hướng dẫn để bắt đầu làm việc với bộ code ở đây:

1. Download và cài đặt [Git](https://git-scm.com/)
2. Tạo một account [GitHub](https://github.com/), sau đó vui lòng nhắn tin account name GitHub để được add vào repo private của nhóm
3. Download [VSCode](https://code.visualstudio.com/) (mặc dù có thể dùng các text editor khác cũng được, nhưng mình khuyên dùng **VSCode** hơn vì nó đã có sẵn hỗ trợ cho Git, tránh mất thời gian thiết lập.)
4. Sau khi đã cài các phần mềm trên, bạn tiến hành clone (tạo bản sao nội bộ để lưu trong máy tính cá nhân), các bước như sau:
	
	Nhấn nút code, sau đó copy url của repo:

	![Clone repo của project](assets/images/Screenshot%202021-01-21%20002255.png)

	Sau đó mở **VSCode** lên, nhấn phím F1, gõ vào lệnh: `git clone`, chọn dòng đầu tiên và nhấn Enter:

	![Tiến hành clone trong VSCode](assets/images/Screenshot%202021-01-21%20002543.png)

	Paste link repo đã copy ở trên vào rồi nhấn Enter:

	![Bắt đầu](assets/images/Screenshot%202021-01-21%20002746.png)

	Chọn nơi lưu code đã clone:

	![Lưu code](assets/images/Screenshot%202021-01-21%20002859.png)

	VSCode sẽ tiến hành download code, sau khi hoàn tất, bạn sẽ được hỏi chuyển sang folder đã clone.. nhấn nút Open:

	![Mở code](assets/images/Screenshot%202021-01-21%20003025.png)

	Vậy là xong, bạn đã ở trong repo code của nhóm!
5. Chuyển nhánh, viết code và đẩy lên repo của nhóm:

	Vậy là bạn đã ở trong repo rồi, việc tiếp theo là viết code và đẩy lên repo, đầu tiên, sau khi các bạn đã clone được repo của nhóm, bạn cần chuyển sang nhánh **dev**, như đã nói ở trên, toàn bộ việc code sẽ được thực hiện ở nhánh **dev** của repo này.

	Việc chuyển nhánh như sau:

	Ở góc trái Status Bar, nhấn vào icon git:

	![branch](assets/images/Screenshot%202021-01-21%20100708.png)

	Sau đó chọn sang nhánh **dev**:

	![switch](assets/images/Screenshot%202021-01-21%20100808.png)

	Vậy là xong, từ đây bạn sẽ tạo file, viết code như thường lệ, chỉ có điều là giờ sẽ bổ sung thêm một bước nữa đó là đẩy lên repo của nhóm thôi, cách đẩy code như sau:

	Khi có các thay đổi trong repo đã clone, VSCode sẽ nháy một thông báo ở phần Source Control ![sc](assets/images/Screenshot%202021-01-21%20101052.png), nhấn vào đó, bạn sẽ nhìn thấy các file đã thay đổi trong code của mình:

	![commit](assets/images/Screenshot%202021-01-21%20101151.png)

	Để lưu các thay đổi này lên git, bạn sẽ cần thực hiện việc **Commit**, việc này để cho git ghi nhận thay đổi của bạn, và để chuẩn bị cho bước tiếp theo là **Push** (đẩy code lên github của nhóm), ở đây bạn nhấn vào ô Message và nhập vào đó thông tin của lần **Commit** này rồi nhấn tổ hợp phím `Ctrl + Enter` hoặc nhấn nút tick ở thanh công cụ.

	Sau khi đã Commit, bạn có thể đẩy code lên github, cách đẩy code như sau:

	Sau khi đã thực hiện Commit, VSCode sẽ hiển thị một trạng thái chờ push ở goc trái Status Bar ![Push](assets/images/Screenshot%202021-01-21%20102424.png), bạn nhấn nút Sync ở đó để đẩy code lên, đồng thời những thay đổi trong code đều sẽ được lấy xuống để tất cả thành viên đều có chung một bộ code hoàn chỉnh ở thời điểm đó.