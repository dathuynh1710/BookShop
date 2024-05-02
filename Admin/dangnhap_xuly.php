<?php
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	
	if(trim($TenDangNhap) == "")
		BaoLoi("Tên đăng nhập không được bỏ trống!");
	elseif(trim($MatKhau) == "")
		BaoLoi("Mật khẩu không được bỏ trống!");
	else
	{
		$MatKhau = md5($MatKhau);
		$sql= "SELECT * FROM users WHERE TenDangNhap = '$TenDangNhap' AND MatKhau = '$MatKhau'";	
		$danhsach = $connect->query($sql);
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
		if($dong)
		{
			$_SESSION['MaND'] = $dong['MaNguoiDung'];
			$_SESSION['HoTen'] = $dong['TenNguoiDung'];
			$_SESSION['QuyenHan'] = $dong['QuyenHan'];
			$_SESSION['MatKhau'] = $dong['MatKhau'];
			header("Location: index.php");
		}
		else
		{
			BaoLoi("Tên đăng nhập hoặc mật khẩu không chính xác!");
		}
	}
	
?>