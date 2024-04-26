<?php
	$sql = "select * from`nhaxuatban` WHERE 1";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách NXB</h3>
<table class="DanhSach">
	<tr>
		<th >ID nhà xuất bản</th>
		<th >Tên nhà xuất bản</th>
		<th >Số ĐT</th>
		<th >Địa chỉ</th>
		<th  colspan="2">Hành động</th>
	</tr>
	<?php
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {		
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				echo "<td>" . $dong["IDNhaXuatBan"] . "</td>";
				echo "<td>" . $dong["TenNhaXuatBan"] . "</td>";
				echo "<td>" . $dong["SoDT"] . "</td>";
				echo "<td>" . $dong["DiaChi"] . "</td>";

				echo "<td align='center'><a href='index.php?do=nxb_sua&id=" . $dong["IDNhaXuatBan"] . "'><img src='images/edit.png' /></a></td>";
				echo "<td align='center'><a href='index.php?do=nxb_xoa&id=" . $dong["IDNhaXuatBan"] . "' onclick='return confirm(\"Bạn có muốn xóa NXB " . $dong['TenNhaXuatBan'] . " không?\")'><img src='images/delete.png' /></a></td>";
			echo "</tr>";
		}
	?>
</table>
	
<a href="index.php?do=nxb_them">Thêm mới nhà xuất bản</a>
</form>