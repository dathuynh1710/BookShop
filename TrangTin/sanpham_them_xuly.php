<?php
	// Lấy thông tin từ FORM
	$TenSach = $_POST['TenSach'];
	$Mota = $_POST['Mota'];
	$NamXB = $_POST['NamXB'];
	$Kichthuoc = $_POST['Kichthuoc'];
	$Sotrang = $_POST['Sotrang'];
	$Gia = $_POST['Gia'];
	$Soluong = $_POST['Soluong'];
	$IDTheLoai = $_POST['IDTheLoai'];
	$IDTacGia = $_POST['IDTacGia'];
	$IDNhaXuatBan = $_POST['IDNhaXuatBan'];
	
	// Kiểm tra
	if(trim($TenSach) == "")
		BaoLoi("Tên sách không được bỏ trống!");
	elseif(trim($Gia) == "")
		BaoLoi("Chưa Nêm Yết Giá!");
	elseif(trim($Soluong) == "")
		BaoLoi("Chưa cho biết số lượng thêm");
	else
	{
		$target_path = "images/";
		$target_path1 = "../TrangTin/images/";

		$target_path = $target_path . basename($_FILES['HinhAnh']['name']);
		$target_path1=	$target_path1 . basename($_FILES['HinhAnh']['name']);

		if (move_uploaded_file($_FILES['HinhAnh']['tmp_name'], $target_path))
			echo "Tập tin " . basename($_FILES['HinhAnh']['name']) . " đã được upload.<br/>";
		else
			echo "Tập tin upload không thành công.<br/>";
		
		copy($target_path, $target_path1);
		$MaNguoiDung = $_SESSION['MaND'];

		$sql = "insert into `sach`(`TenSach`,`MoTa`,`NamXB`,`KichThuoc`,`SoTrang`, `HinhAnh`, `DonGia`, `SoLuong`,`IDTheLoai`, `IDTacGia`, `IDNhaXuatBan`)
				VALUES ('$TenSach', '$Mota','$NamXB','$Kichthuoc','$Sotrang', '$target_path', $Gia, $Soluong, $IDTheLoai,$IDTacGia,$IDNhaXuatBan)";

		$danhsach = $connect->query($sql);
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		else
		{
			ThongBao("Thêm sản phẩm thành công!");
		}
	}
?>