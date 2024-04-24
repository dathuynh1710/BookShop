<?php
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	
	if(trim($TenDangNhap) == "")
		BaoLoi("Tên đăng nhập không được bỏ trống!");
	elseif(trim($MatKhau) == "")
		BaoLoi("Mật khẩu không được bỏ trống!");
	else
	{
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
			if($dong['QuyenHan'] == 1)
			{
				header("Location: index.php?do=quanly");
			}
			else
			{
				header("Location: index.php?do=dssanpham_khachhang");
			}	
		
		}
		else
		{
			BaoLoi("Tên đăng nhập hoặc mật khẩu không chính xác!");
		}
	}
	
?>