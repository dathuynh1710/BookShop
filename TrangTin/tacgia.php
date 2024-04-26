<head>
	<style>
		#BenPhai{
			display: none;
		}

		#Giua{
			width: 990px;
		}
	</style>
</head>
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
<table class="DanhSach">
	<tr>
		<th >ID Tác giả </th>
		<th >Tên Tác giả</th>
		<th >Ghi chú</th>
		<th  colspan="2">Hành động</th>
	</tr>
	<?php
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {		
			echo "<tr  bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
				echo "<td>" . $dong["IDTacGia"] . "</td>";
				echo "<td>" . $dong["TenTacGia"] . "</td>";
				echo "<td>" . $dong["GhiChu"] . "</td>";
				echo "<td align='center'><a href='index.php?do=tacgia_sua&id=" . $dong["IDTacGia"] . "'><img src='images/edit.png' /></a></td>";
				echo "<td align='center'><a href='index.php?do=tacgia_xoa&id=" . $dong["IDTacGia"] . "' onclick='return confirm(\"Bạn có muốn xóa tác giả " . $dong['TenTacGia'] . " không?\")'><img src='images/delete.png' /></a></td>";
			echo "</tr>";
		}
	?>
</table>
	
<a href="index.php?do=tacgia_them">Thêm mới tác giả</a>
</form>