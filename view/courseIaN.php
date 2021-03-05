<table>
	<th>Thông tin khóa học</th>
	<tr>
		<td>Giảng viên</td>
		<td><?= $d['name'] ?></td>
	</tr>
	<tr>
		<td>Thời lượng khóa học</td>
		<td><?= $d['duration'] ?> tháng</td>
	</tr>
	<tr>
		<td>Học phí</td>
		<td><?= number_format($d['price'], 0, ",", ".") ?> đồng</td>
	</tr>
</table>