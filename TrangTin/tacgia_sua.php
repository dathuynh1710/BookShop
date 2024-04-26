<?php
	// Lấy chủ đề cần sửa "đổ" vào form
	$sql = "select * from `tacgia` where IDTacGia = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Sửa tác giả</h3>
<form action="index.php?do=tacgia_sua_xuly" method="post">
	<table class="Form">
		<input type="hidden" name="IDTacGia" value="<?php echo $dong['IDTacGia']; ?>" />
		<tr>
			<td>Tên tác giả:</td>
			<td><input type="text" name="TenTacGia" value="<?php echo $dong['TenTacGia']; ?>" /></td>
		</tr>
		<tr>
			<td>Ghi chú:</td>
			<td><input type="text" name="GhiChu" value="<?php echo $dong['GhiChu']; ?>" /></td>
		</tr>
	</table>
	
	<input type="submit" value="Cập nhật" />
</form>