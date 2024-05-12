<?php
	$sql = "select * from `theloai` WHERE 1";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách thể loại</h3>
<table class="table table-hover text-center">
<thead class="table-dark">	<tr>
		<th width="30%">ID Thể Loại</th>
		<th width="50%">Tên Thể Loại</th>
		<th width="15%" colspan="2">Hành động</th>
	</tr>
	</thead>

	<?php
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {		
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				echo "<td>" . $dong["IDTheLoai"] . "</td>";
				echo "<td>" . $dong["TenTheLoai"] . "</td>";
				echo "<td align='center'><a href='index.php?do=theloai_sua&id=" . $dong["IDTheLoai"] . "' class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a></td>";
				echo "<td align='center'><a href='index.php?do=theloai_xoa&id=" . $dong["IDTheLoai"] . "' class='link-dark' onclick='return confirm(\"Bạn có muốn xóa thể loại " . $dong['TenTheLoai'] . " không?\")'><i class='fa-solid fa-trash fs-5'></i></a></td>";

			echo "</tr>";
		}
	?>
</table>
<a  href="index.php?do=theloai_them" class="btn btn-dark mb-3">Thêm mới thể loại</a>

</form>