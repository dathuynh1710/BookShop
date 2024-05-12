<form enctype="multipart/form-data" action="index.php?do=sanpham_them_xuly" method="post">
	<table class="FormDangBaiViet" >
		<tr>
			<th colspan="2"><h3>Sản phẩm mới</h3></th>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Tên sách:</span></td>
			<td><input type="text" class="form-control" name="TenSach" ></td>

		</tr>
		<tr>
		<div class="form-group">

			<td><span class="MyFormLabel">Mô tả:</span></td>
			<td><textarea class="form-control" name="Mota" ></textarea></td>
			</div>
		</tr>
		<tr>
			<td><span class="MyFormLabel">Năm xuất bản:</span></td>
			<td><input type="text" class="form-control" name="NamXB" ></td>

		</tr>
		<tr>
			<td><span class="MyFormLabel">Kích thước:</span></td>
			<td><input type="text" class="form-control" name="Kichthuoc" ></td>

		</tr>
		<tr>
			<td><span class="MyFormLabel">Số trang:</span></td>
			<td><input type="text" class="form-control" name="Sotrang" ></td>

		</tr>
		<tr>
			<td><span class="MyFormLabel">Giá sách:</span></td>
			<td><input type="text" class="form-control" name="Gia" placeholder="VNĐ" ></td>

		</tr>
		<tr>
			<td><span class="MyFormLabel">Số Lượng:</span></td>
			<td><input type="text" class="form-control" name="Soluong" ></td>

		</tr>
		
		<tr>
			<td><span class="MyFormLabel">Thể loại:</span></td>
			<td>
				<select class="form-control" name="IDTheLoai">

				<option selected>Choose...</option>

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
				<select class="form-control" name="IDTacGia">

				<option selected>Choose...</option>
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
				<select class="form-control" name="IDNhaXuatBan">

				<option selected>Choose...</option>
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
			<td>
			<div class="custom-file">
  <input type="file" class="custom-file-input" name="HinhAnh" accept="image/*">
  <label class="custom-file-label" for="customFile">Choose file</label>
</div></td>

		</tr>
		<tr>
			<td>
			<div class="cta" >	
			<button type="submit" class="btn btn-outline-success " name="submit">Thêm sản phẩm</button> 
			</div>
			</td>
			

		</tr>
	</table>
</form>