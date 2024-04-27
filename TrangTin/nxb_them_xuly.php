<?php
	// Lấy thông tin từ FORM
	$TenNhaXuatBan = $_POST['TenNhaXuatBan'];
	$SoDT = $_POST['SoDT'];
	$DiaChi = $_POST['DiaChi'];

	// Kiểm tra
	if(trim($TenNhaXuatBan) == "")
		ThongBaoLoi("Tên nhà xuất bản không được bỏ trống!");
	else
	{
		$sql = "INSERT INTO `nhaxuatban`(`TenNhaXuatBan`,`SoDT`,`DiaChi`) VALUES ('$TenNhaXuatBan','$SoDT','$DiaChi')";
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Đã thêm thành công NXB!!");
		}	
		
	}
?>