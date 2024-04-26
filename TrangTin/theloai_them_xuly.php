<?php

	// Lấy thông tin từ FORM
	$TenTheLoai = $_POST['TenTheLoai'];
	
	// Kiểm tra
	if(trim($TenTheLoai) == "")
		BaoLoi("Tên thể loại không được bỏ trống!");
	else
	{
		$sql = "INSERT INTO `theloai`(`TenTheLoai`) VALUES ('$TenTheLoai')";
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Đã thêm thành công thể loại!!");
		}	
		
	}
?>
