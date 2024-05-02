<?php
	$MaNguoiDung = $_POST['MaNguoiDung'];
	$newTenNguoiDung = $_POST['HoVaTen'];
    $newDiaChi = $_POST['DiaChi'];
	$newSDT = $_POST['SDT'];
	
	$sql = "UPDATE `users` SET `TenNguoiDung`='$newTenNguoiDung',  DiaChi = '$newDiaChi',  SDT = '$newSDT' WHERE `MaNguoiDung`=$MaNguoiDung";
	$danhsach = $connect->query($sql);
	if (!$danhsach) 
	{
	  die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
	  exit();
	}
	else
	{
		echo "Cập nhật hồ sơ thành công.";
	}		
	
?>