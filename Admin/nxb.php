<?php
	$sql = "select * from`nhaxuatban` WHERE 1";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách Nhà Xuất Bản</h3>
<table class="table table-hover text-center">
<thead class="table-dark">
<tr>
		<th >ID NXB</th>
		<th >Tên NXB</th>
		<th >Số ĐT</th>
		<th >Địa chỉ</th>
		<th  colspan="2">Hành động</th>
	</tr>
	</thead>
	<?php
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {		
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				echo "<td>" . $dong["IDNhaXuatBan"] . "</td>";
				echo "<td>" . $dong["TenNhaXuatBan"] . "</td>";
				echo "<td>" . $dong["SoDT"] . "</td>";
				echo "<td>" . $dong["DiaChi"] . "</td>";

				echo "<td align='center'><a href='index.php?do=nxb_sua&id=" . $dong["IDNhaXuatBan"] . "' class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a></td>";
				echo "<td align='center'><a href='index.php?do=nxb_xoa&id=" . $dong["IDNhaXuatBan"] . "' class='link-dark' onclick='return confirm(\"Bạn có muốn xóa NXB " . $dong['TenNhaXuatBan'] . " không?\")'><i class='fa-solid fa-trash fs-5'></i></a></td>";

			echo "</tr>";
		}
	?>
</table>
	<a  href="index.php?do=nxb_them" class="btn btn-dark mb-3">Thêm nhà xuất bản</a>

</form>