<?php
	// Lấy thông tin từ FORM
	$TenTacGia = $_POST['TenTacGia'];
	$GhiChu= $_POST['GhiChu'];
	// Kiểm tra
	if(trim($TenTacGia) == "")
		BaoLoi("Tên tác giả không được bỏ trống!");
	else
	{
		$sql = "INSERT INTO `tacgia`(`TenTacGia`,`GhiChu`) VALUES ('$TenTacGia','$GhiChu')";
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Đã thêm thành công tác giả!!");
		}	
		
	}
?>