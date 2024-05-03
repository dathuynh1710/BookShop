<head>
	<link rel="stylesheet" type="text/css" href="css/style_spchitiet.css" />
</head>
<?php
	$IdSanPham = $_GET['id_sp'];
	
	$sql =	"SELECT
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
			JOIN
				nhaxuatban ON sach.IDNhaXuatBan = nhaxuatban.IDNhaXuatBan
			AND sach.IDSach = $IdSanPham";

	$danhsach = $connect->query($sql);

	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	
	$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
?>
<table>
	<tr > 
		<td>
			<div><?php echo "<img class='img-sach' width=\"250\" src=" . $dong["HinhAnh"] . ">"; ?></div>			
		</td>
		<td class='info-sach'>
			<h1 class="name-sach"><?php echo $dong['TenSach']; ?></h1>
			<p class="TomTat"> <span class="dongia" style="color: red;font-weight: 700;"><?php echo number_format($dong['DonGia']); ?> đ</span></p>

			<p class="TomTat">Tác giả: <p style="color: #2489F4;font-weight: 600;"><?php echo $dong['TenTacGia']; ?></p></p>
			<p class="TomTat" >Nhà xuất bản: </br></br><strong  ><?php echo $dong['TenNhaXuatBan']; ?></strong></p>
			<span class="text-soluong">Số Lượng</span>
			<input class="input-text qty" name="soluong" min="1" value="1" title="Qty" type="number">
			<div class="addtocart__actions">
				<a class="tocart" title="Add to Cart" href="dangnhap.php" onclick="return confirm('Bạn có muốn thêm sản phẩm <?=htmlspecialchars($dong['TenSach'], ENT_QUOTES)?> vào giỏ hàng không?')">Thêm Vào Giỏ Hàng</a>
			</div>
		</td>
		
	</tr>
	
</table>

<table>
    <tr>
        <h3>Thông tin sản phẩm</h3>
    </tr>
    <tr>
        <td><p>Mô tả:</p></td>
        <td><?php echo $dong['MoTa']; ?></td>
    </tr>
    <tr>
        <td><p>Năm xuất bản:</p></td>
        <td><?php echo $dong['NamXB']; ?></td>
    </tr>
    <tr>
        <td><p>Kích thước:</p></td>
        <td><?php echo $dong['KichThuoc']; ?></td>
    </tr>
    <tr>
        <td><p>Số trang:</p></td>
        <td><?php echo $dong['SoTrang']; ?></td>
    </tr>
    <tr>
        <td><p>Số lượng:</p></td>
        <td><?php echo $dong['SoLuong']; ?></td>
    </tr>
    <tr>
        <td><p>Thể loại:</p></td>
        <td><?php echo $dong['TenTheLoai']; ?></td>
    </tr>
</table>

