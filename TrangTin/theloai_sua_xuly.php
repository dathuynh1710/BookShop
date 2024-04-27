<?php
	// Lấy thông tin từ FORM
	$IDTheLoai = $_POST['IDTheLoai'];
	$TenTheLoai = $_POST['TenTheLoai'];
	
	// Kiểm tra
	if(trim($TenTheLoai) == "")
		BaoLoi("Tên thể loại không được bỏ trống!");
	else
	{
		$sql = "update `theloai` SET `TenTheLoai` = '$TenTheLoai' WHERE `IDTheLoai` = $IDTheLoai";
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			header("Location: index.php?do=theloai");
		}
	}
?>