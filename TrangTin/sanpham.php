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
	$sql =	"select
	sach.IDSach,
	sach.TenSach,
	sach.MoTa,
	sach.NamXB,
	sach.KichThuoc,
	sach.SoTrang,
	sach.HinhAnh,
	sach.DonGia,
	sach.SoLuong,
	theloai.TenTheLoai,
	tacgia.TenTacGia,
	nhaxuatban.TenNhaXuatBan

	FROM
		sach
	JOIN
		theloai ON sach.IDTheLoai = theloai.IDTheLoai
	JOIN
		tacgia ON sach.IDTacGia = tacgia.IDTacGia
	LEFT JOIN
		nhaxuatban ON sach.IDNhaXuatBan = nhaxuatban.IDNhaXuatBan
	ORDER by `IDSach` DESC";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách sản phẩm</h3>
<table class="DanhSach">
	<tr>
		<th>STT</th>
		<th width="10%">Tên Sách</th>
		<th >Mô tả</th>
		<th >Năm XB</th>
		<th width="10%" >Kích thước</th>
		<th >Số trang</th>
		<th >Giá(VNĐ)</th>
		<th >Số lượng</th>
		<th >Thể loại</th>
		<th >Tác giả</th>
		<th >NXB</th>
		<th >Hình Ảnh</th>
		<th  colspan="2">Hành động</th>
	</tr>
	<?php
		$stt = 1;
		while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {	
			echo "<tr>";
				echo "<td>" . $stt . "</td>";
				echo "<td > " . $dong["TenSach"] . "</td>";
				echo "<td > " . $dong["MoTa"] . "</td>";
				echo "<td >" . $dong["NamXB"] . "</td>";
				echo "<td >" . $dong["KichThuoc"] . "</td>";
				echo "<td >" . $dong["SoTrang"] . "</td>";
				echo "<td>" . number_format($dong["DonGia"], 0, '.', '.') . "</td>";
				echo "<td >" . $dong["SoLuong"] . "</td>";	
				echo "<td>" . $dong["TenTheLoai"] . "</td>";
				echo "<td>" . $dong["TenTacGia"] . "</td>";
				echo "<td>" . $dong["TenNhaXuatBan"] . "</td>";
				echo "<td><img src='".$dong['HinhAnh']."' width='100'/></td>";
				echo "<td align='center'><a href='index.php?do=sanpham_sua&id=" . $dong['IDSach'] . "'><img src='images/edit.png' /></a></td>";
				echo "<td align='center'><a href='index.php?do=sanpham_xoa&id=" . $dong['IDSach'] . "' onclick='return confirm(\"Bạn có muốn xóa sách " . $dong['TenSach'] . " không?\")'><img src='images/delete.png' /></a></td>";
			echo "</tr>";
			$stt++;
		}
	?>
</table>

<a href="index.php?do=sanpham_them">Thêm sản phẩm</a>