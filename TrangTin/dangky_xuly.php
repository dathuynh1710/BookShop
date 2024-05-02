<?php
	// Lấy thông tin từ FORM
	$QuyenHan = 2;
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
		// Kiểm tra người dùng đã tồn tại chưa
		$sql = "SELECT * FROM users WHERE TenDangNhap = '$TenDangNhap'";
		$danhsach = $connect->query($sql);
		
		if($danhsach)
		{
			if ($danhsach->num_rows > 0) {
				BaoLoi("Người dùng với tên đăng nhập đã được sử dụng!");
			} else {
				// Thêm người dùng
				$sql_them_user = "INSERT INTO `users` (`TenNguoiDung`, `TenDangNhap`, `MatKhau`,`QuyenHan`, `DiaChi`,`SDT`)
						VALUES ( '$HoVaTen', '$TenDangNhap', '$MatKhau','$QuyenHan', '$DiaChi', '$SDT')";
				$them_user = $connect->query($sql_them_user);
				
				if($them_user) {
					ThongBao("Đăng ký thành công!. Vui lòng tiến hành đăng nhập để tiếp tục mua sắm");
				} else {
					BaoLoi('Đã xảy ra lỗi khi thêm dữ liệu vào CSDL!');
				}
			}
		}
		else
		{
			BaoLoi("Đã xảy ra lỗi khi kiểm tra người dùng!");
		}
	}
?>
