<h3>Thêm nhà xuất bản</h3>
<form action="index.php?do=nxb_them_xuly" method="post">
	<table class="Form">
		<tr>
			<td>Tên nhà xuất bản:</td>
			<td><input type="text" name="TenNhaXuatBan" /></td>
		</tr>
		<tr>
			<td>Số điện thoại:</td>
			<td><input type="text" name="SoDT" /></td>
		</tr>
		<tr>
			<td>Địa chỉ:</td>
			<td><input type="text" name="DiaChi" /></td>
		</tr>
	</table>

	<div class="cta" style='margin-top: 10px;'>	
		<button type="submit" class="btn btn-success" name="submit">Thêm</button>
        <a href="index.php?do=nxb" class="btn btn-danger">Cancel</a>
	</div>
</form>