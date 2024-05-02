<?php
	if(isset($_GET['quyen']))
	{
		$sql = "UPDATE `users` SET `QuyenHan` = " . $_GET['quyen'] . " WHERE `MaNguoiDung` = " . $_GET['id'];
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		if($danhsach)
			header("Location: index.php?do=nguoidung");
		else
			BaoLoi(mysql_error());
	}
?>