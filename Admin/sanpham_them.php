<form enctype="multipart/form-data" action="index.php?do=sanpham_them_xuly" method="post">
	<table class="FormDangBaiViet" >
		<tr>
			<th colspan="2"><h3>Mặt hàng mới</h3></th>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Tên sách:</span></td>
			<td><input type="text" name="TenSach" /></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Mô tả:</span></td>
			<td><textarea name="Mota" ></textarea></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Năm xuất bản:</span></td>
			<td><input type="text" name="NamXB" /></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Kích thước:</span></td>
			<td><input type="text" name="Kichthuoc" /></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Số trang:</span></td>
			<td><input type="text" name="Sotrang" /></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Giá sách:</span></td>
			<td><input type="text" name="Gia" placeholder="VNĐ"/></td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Số Lượng:</span></td>
			<td><input type="text" name="Soluong" /></td>
		</tr>
		
		<tr>
			<td><span class="MyFormLabel">Thể loại:</span></td>
			<td>
				<select name="IDTheLoai">
					<option value="">-- Chọn --</option>
						<?php
							$sql = "SELECT * FROM `theloai` WHERE 1 ORDER BY TenTheLoai";
							$danhsach = $connect->query($sql);
							if (!$danhsach) {
								die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
								exit();
							}

							while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
							{
								echo "<option value='" . $dong['IDTheLoai'] . "'>" .$dong['TenTheLoai'] . "</option>";
							}								
						?>													
				</select>
			</td>
		<tr>
		<tr>
			<td><span class="MyFormLabel">Tác Giả:</span></td>
			<td>
				<select name="IDTacGia">
					<option value="">-- Chọn --</option>
						<?php
							$sql = "SELECT * FROM `tacgia` WHERE 1 ORDER BY TenTacGia";
							$danhsach = $connect->query($sql);
							if (!$danhsach) {
								die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
								exit();
							}

							
							while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
							{
								echo "<option value='" . $dong['IDTacGia'] . "'>" 
								.$dong['TenTacGia'] . "</option>";
							}
						?>
				</select>				
			</td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Tên Nhà Xuất Bản:</span></td>
			<td>
				<select name="IDNhaXuatBan">
					<option value="">-- Chọn --</option>
						<?php
							$sql = "SELECT * FROM `nhaxuatban` WHERE 1 ORDER BY TenNhaXuatBan";
							$danhsach = $connect->query($sql);
							if (!$danhsach) {
								die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
								exit();
							}

							
							while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) 
							{
								echo "<option value='" . $dong['IDNhaXuatBan'] . "'>" 
								.$dong['TenNhaXuatBan'] . "</option>";
							}
						?>
				</select>				
			</td>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Hình ảnh</span></td>
			<td><input type="file" name="HinhAnh" accept="image/*"/></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" value="Cập nhật sản phẩm"/></td>
		</tr>
	</table>
</form>