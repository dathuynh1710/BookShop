<?php
	// Lấy chủ đề cần sửa "đổ" vào form
	$sql = "select * from `nhaxuatban` where IDNhaXuatBan = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Sửa nhà xuất bản</h3>
<form action="index.php?do=nxb_sua_xuly" method="post">
	<table class="Form">
		<input type="hidden" name="IDNhaXuatBan" value="<?php echo $dong['IDNhaXuatBan']; ?>" />
		<tr>
			<td>Tên nhà xuất bản:</td>
			<td><input type="text" name="TenNhaXuatBan" value="<?php echo $dong['TenNhaXuatBan']; ?>" /></td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td><input type="text" name="SoDT" value="<?php echo $dong['SoDT']; ?>" /></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><input type="text" name="DiaChi" value="<?php echo $dong['DiaChi']; ?>" /></td>
		</tr>
	</table>
	<div class="cta" style='margin-top: 10px;'>	
		<button type="submit" class="btn btn-success" name="submit">Update</button>
        <a href="index.php?do=nxb" class="btn btn-danger">Cancel</a>
	</div>
</form>