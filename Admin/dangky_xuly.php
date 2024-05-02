<?php
	$HoVaTen = $_POST['HoVaTen'];
	$TenDangNhap = $_POST['TenDangNhap'];
	$MatKhau = $_POST['MatKhau'];
	$XacNhanMatKhau = $_POST['XacNhanMatKhau'];
	$DiaChi = $_POST['DiaChi'];
	$SDT = $_POST['SDT'];
	// Kiểm tra
	if(trim($HoVaTen) == "")
		BaoLoi("Họ và tên không được bỏ trống!");
	elseif(trim($TenDangNhap) == "")
		BaoLoi("Tên đăng nhập không được bỏ trống!");
	elseif(trim($MatKhau) == "")
		BaoLoi("Mật khẩu không được bỏ trống!");
	elseif($MatKhau != $XacNhanMatKhau)
		BaoLoi("Xác nhận mật khẩu không đúng!");
	elseif(trim($DiaChi) == "")
		BaoLoi("Địa chỉ không được để trống!");
	elseif(trim($SDT) == "")
		BaoLoi("Số điện thoại không được để trống!");
	else
	{
		$sql_kiemtra = "SELECT * FROM users WHERE TenDangNhap = '$TenDangNhap'";
		$danhsach = $connect->query($sql_kiemtra);
		
		if($danhsach)
		{
			$MatKhau = md5($MatKhau);
			$sql_them = "INSERT INTO `users` (`TenNguoiDung`, `TenDangNhap`, `MatKhau`,`QuyenHan`, `DiaChi`,`SDT`) VALUES ( '$HoVaTen', '$TenDangNhap', '$MatKhau',2, '$DiaChi', '$SDT')";
			$themnd = $connect->query($sql_them);
			if($themnd) {
				echo 'Chúc mừng bạn đã đăng ký thành công, <a style="color:#33CCFF;" href="index.php?do=dangnhap">click vào đây để đăng nhập</a>';
			} else {
				BaoLoi("Đã xảy ra lỗi khi thêm dữ liệu vào CSDL!");
			}				
		}else
			ThongBao("Người dùng với tên đăng nhập đã được sử dụng!");
		}
?>
