<?php
    $MaNguoiDung = $_POST['MaNguoiDung'];
	  $TenNguoiDung = $_POST['TenNguoiDung'];
    $TenDangNhap = $_POST['TenDangNhap'];
    if(trim($TenNguoiDung) == ""||trim($TenDangNhap)=="")
		  BaoLoi("Tên người dùng và tên đăng nhập không được bỏ trống!");
    else
    {
        $sql = "UPDATE `users` SET `TenNguoiDung`='$TenNguoiDung',`TenDangNhap`='$TenDangNhap' WHERE `MaNguoiDung`=$MaNguoiDung";
        $danhsach = $connect->query($sql);
        if (!$danhsach) 
        {
          die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
          exit();
        }
        else
        {
          header("Location: index.php?do=nguoidung");
        }
    }
?>