<?php
	$sql = "delete from `tacgia` where IDTacGia = " . $_GET['id'];
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	else
	{
		ThongBao("Đã xóa thành công tác giả!!");
	}
?>