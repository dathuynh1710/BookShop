<?php
	$sql = "SELECT * FROM `users` WHERE 1";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}

?>
<h3>Danh sách người dùng</h3>
<table class="DanhSach">
	<tr>
		<th>Mã ND</th>
		<th>Họ và tên</th>
		<th>Tên đăng nhập</th>
		<th>Quyền</th>
		<th colspan="2">Hành động</th>
	</tr>
	<?php
		
		//Dùng vòng lặp while truy xuất các phần tử trong table
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
		{			
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				
				echo "<td >" . $dong["MaNguoiDung"] . "</td>";
				echo "<td>" . $dong["TenNguoiDung"] . "</td>";
				echo "<td>" . $dong["TenDangNhap"] . "</td>";
				
				echo "<td>";
					if($dong["QuyenHan"] == 1)
						echo "<strong color='red'>Quản trị</strong> (<a class='quyenhan' href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&quyen=2'>Hạ quyền</a>)";
					else
						echo "Thành viên (<a class='quyenhan' href='index.php?do=nguoidung_kichhoat&id=" . $dong["MaNguoiDung"] . "&quyen=1'>Nâng quyền</a>)";
				echo "</td>";
				
				echo "<td align='center'><a href='index.php?do=nguoidung_sua&id=" . $dong["MaNguoiDung"] . "'><img src='images/edit.png' /></a></td>";
				echo "<td align='center'><a href='index.php?do=nguoidung_xoa&id=" . $dong["MaNguoiDung"] . "' onclick='return confirm(\"Bạn có muốn xóa người dùng " . $dong['TenNguoiDung'] . " không?\")'><img src='images/delete.png' /></a></td>";
			echo "</tr>";
		
		}
	?>
</table>
	
<a href="index.php?do=dangky">Thêm mới người dùng</a>
</form>