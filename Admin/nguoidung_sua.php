<?php
	// Lấy chủ đề cần sửa "đổ" vào form
	$sql = "SELECT * FROM `users` WHERE MaNguoidung = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Sửa người dùng</h3>
<form action="index.php?do=nguoidung_sua_xuly" method="post">
	<table class="Form">
		<input type="hidden" name="MaNguoiDung" value="<?php echo $dong['MaNguoiDung']; ?>" />
		<tr>
			<td>Tên người dùng:</td>
			<td><input type="text" name="TenNguoiDung" value="<?php echo $dong['TenNguoiDung']; ?>" /></td>
		</tr>
		<tr>
			<td>Tên đăng nhập:</td>
			<td><input type="text" name="TenDangNhap" value="<?php echo $dong['TenDangNhap']; ?>" /></td>
		</tr>
	</table>
	<input type="submit" value="Cập nhật" />
</form>

