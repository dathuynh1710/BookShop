<?php
	// Lấy thông tin từ FORM
	$IDSach = $_POST['IDSach']; 
	$TenSach = $_POST['TenSach'];
	$MoTa = $_POST['MoTa'];
	$NamXB = $_POST['NamXB'];
	$KichThuoc = $_POST['KichThuoc'];
	$SoTrang = $_POST['SoTrang'];
	$DonGia = $_POST['DonGia'];
	$SoLuong = $_POST['SoLuong'];	
	$IDTheLoai = $_POST['IDTheLoai'];
	$IDTacGia = $_POST['IDTacGia'];
	$IDNhaXuatBan = $_POST['IDNhaXuatBan'];

	// Kiểm tra
	if(trim($TenSach) == "")
		BaoLoi("Tên sách không được bỏ trống!");
	elseif(trim($MoTa) == "")
		BaoLoi("Mô tả không được bỏ trống!");
	elseif(trim($DonGia) == "")
		BaoLoi("Đơn giá không được bỏ trống!");
	elseif(trim($SoLuong) == "")
		BaoLoi("Số lượng không được bỏ trống!");

	else
	{	
		$sql = "UPDATE `sach` SET `TenSach`='$TenSach',`MoTa`='$MoTa',
		`NamXB`='$NamXB',`KichThuoc`='$KichThuoc',`SoTrang`='$SoTrang',
		`DonGia`=$DonGia,`SoLuong`= $SoLuong,`IDTheLoai`='$IDTheLoai',`IDTacGia`='$IDTacGia',
		`IDNhaXuatBan`='$IDNhaXuatBan' WHERE `IDSach`=$IDSach";
		
		$danhsach = $connect->query($sql);
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Chỉnh sửa thông tin sách thành công!");
		}		
	}
?>