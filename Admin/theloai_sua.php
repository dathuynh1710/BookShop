<?php
	// Lấy chủ đề cần sửa "đổ" vào form
	$sql = "select * from `theloai` where IDTheLoai = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<h3>Sửa thể loại</h3>
<form action="index.php?do=theloai_sua_xuly" method="post">
	<table class="Form">
		<input type="hidden" name="IDTheLoai" value="<?php echo $dong['IDTheLoai']; ?>" />
		<tr>
			<td>Tên thể loại:</td>
			<td><input type="text" name="TenTheLoai" value="<?php echo $dong['TenTheLoai']; ?>" /></td>
		</tr>
	</table>
	
	<div class="cta" style='margin-top: 10px;'>	
		<button type="submit" class="btn btn-success" name="submit">Update</button>
        <a href="index.php?do=theloai" class="btn btn-danger">Cancel</a>
	</div>
</form>