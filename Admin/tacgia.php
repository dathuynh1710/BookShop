<?php
	$sql = "select * from`tacgia` WHERE 1";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách tác giả</h3>
<table class="table table-hover text-center">
<thead class="table-dark">
	<tr>
		<th >ID Tác giả </th>
		<th >Tên Tác giả</th>
		<th >Ghi chú</th>
		<th  colspan="2">Hành động</th>
	</tr>
	</thead>

	<?php
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {		
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				echo "<td>" . $dong["IDTacGia"] . "</td>";
				echo "<td>" . $dong["TenTacGia"] . "</td>";
				echo "<td>" . $dong["GhiChu"] . "</td>";
				echo "<td align='center'><a href='index.php?do=tacgia_sua&id=" . $dong["IDTacGia"] . "' class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a></td>";
				echo "<td align='center'><a href='index.php?do=tacgia_xoa&id=" . $dong["IDTacGia"] . "' class='link-dark' onclick='return confirm(\"Bạn có muốn xóa tác giả " . $dong['TenTacGia'] . " không?\")'><i class='fa-solid fa-trash fs-5'></i></a></td>";

			echo "</tr>";
		}
	?>
</table>
	
<a  href="index.php?do=tacgia_them" class="btn btn-dark mb-3">Thêm mới tác giả</a>

</form>