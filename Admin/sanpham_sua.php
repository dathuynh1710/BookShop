<?php
	$IDSach = $_GET['id'];
	
	$sql = "select * from `sach` where IDSach = '$IDSach'";
	
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
	
	$dong = $danhsach->fetch_array(MYSQLI_ASSOC)
?>
<h3>Sửa sản phẩm</h3>
<form action="index.php?do=sanpham_sua_xuly" method="post">
	<table class="FormDangBaiViet">
		<input type="hidden" name="IDSach" value="<?php echo $dong['IDSach']; ?>" />
			
		<tr>
			<td>
				<span class="MyFormLabel">Tên sách:</span>
				<input type="text" name="TenSach" value="<?php echo $dong['TenSach']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Mô tả:</span>
				<input type="text" name="MoTa" value="<?php echo $dong['MoTa']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Năm XB:</span>
				<input type="text" name="NamXB" value="<?php echo $dong['NamXB']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Kích Thước:</span>
				<input type="text" name="KichThuoc" value="<?php echo $dong['KichThuoc']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Số trang:</span>
				<input type="text" name="SoTrang" value="<?php echo $dong['SoTrang']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Đơn giá:</span>
				<input type="text" name="DonGia" value="<?php echo $dong['DonGia']; ?>" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="MyFormLabel">Số lượng:</span>
				<input type="text" name="SoLuong" value="<?php echo $dong['SoLuong']; ?>" />
			</td>
		</tr>

		<tr>
			<td>
				<span class="MyFormLabel">Thể loại:</span>
				<select name="IDTheLoai">
					<option value="">-- Chọn --</option>
					<?php
						$sql = "select * from `theloai` where 1 ORDER BY TenTheLoai";
						$danhsach = $connect->query($sql);
						//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
						if (!$danhsach) {
							die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
							exit();
						}
						
						while($dong_nsx = $danhsach->fetch_array(MYSQLI_ASSOC))
						{
							if($dong['IDTheLoai'] == $dong_nsx['IDTheLoai'])
								echo "<option value='" . $dong_nsx['IDTheLoai'] . "' selected='selected'>" . $dong_nsx['TenTheLoai'] . "</option>";
							else
								echo "<option value='" . $dong_nsx['IDTheLoai'] . "'>" . $dong_nsx['TenTheLoai'] . "</option>";
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				<span class="MyFormLabel">Tác giả:</span>
				<select name="IDTacGia">
					<option value="">-- Chọn --</option>
					<?php
						$sql = "select * from `tacgia` where 1 ORDER BY TenTacGia";
						$danhsach = $connect->query($sql);
						//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
						if (!$danhsach) {
							die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
							exit();
						}
						
						while($dong_nsx = $danhsach->fetch_array(MYSQLI_ASSOC))
						{
							if($dong['IDTacGia'] == $dong_nsx['IDTacGia'])
								echo "<option value='" . $dong_nsx['IDTacGia'] . "' selected='selected'>" . $dong_nsx['TenTacGia'] . "</option>";
							else
								echo "<option value='" . $dong_nsx['IDTacGia'] . "'>" . $dong_nsx['TenTacGia'] . "</option>";
						}
					?>
				</select>
			</td>
		</tr>

		<tr>
			<td>
				<span class="MyFormLabel">Nhà xuất bản:</span>
				<select name="IDNhaXuatBan">
					<option value="">-- Chọn --</option>
					<?php
						$sql = "select * from `nhaxuatban` where 1 ORDER BY TenNhaXuatBan";
						$danhsach = $connect->query($sql);
						//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
						if (!$danhsach) {
							die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
							exit();
						}
						
						while($dong_nsx = $danhsach->fetch_array(MYSQLI_ASSOC))
						{
							if($dong['IDNhaXuatBan'] == $dong_nsx['IDNhaXuatBan'])
								echo "<option value='" . $dong_nsx['IDNhaXuatBan'] . "' selected='selected'>" . $dong_nsx['TenNhaXuatBan'] . "</option>";
							else
								echo "<option value='" . $dong_nsx['IDNhaXuatBan'] . "'>" . $dong_nsx['TenNhaXuatBan'] . "</option>";
						}
					?>
				</select>
			</td>
		</tr>
		
	</table>
	
	<input type="submit" value="Cập nhật" />
</form>