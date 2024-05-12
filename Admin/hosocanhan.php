<?php
	$sql = "SELECT * FROM `users` WHERE MaNguoiDung = " . $_SESSION['MaND'];
	
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	
	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Hồ sơ cá nhân</h3>
<form action="index.php?do=hosocanhan_xuly" method="post">
	<table class="Form">
		<input type="hidden" value="<?php echo $dong['MaNguoiDung']; ?>" name="MaNguoiDung" />
		<tr>
			<td>Họ và tên:</td>
			<td><input type="text" class="form-control" value="<?php echo $dong['TenNguoiDung']; ?>" name="HoVaTen" /></td>
			

		</tr>
		<tr>
			<td>Tên đăng nhập:</td>
			<td><input type="text" class="form-control" value="<?php echo $dong['TenDangNhap']; ?>" name="TenDangNhap" disabled="disabled" /></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td>	<input type="text" class="form-control" value="<?php echo $dong['DiaChi']; ?>" name="DiaChi" placeholder="Địa chỉ"/>
</td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td>	<input type="text" class="form-control" value="<?php echo $dong['SDT']; ?>" name="SDT" placeholder="Địa chỉ"/>
</td>
		</tr>

	</table>
	
	<button type="submit" class="btn btn-primary">Cập nhật hồ sơ</button>

</form>