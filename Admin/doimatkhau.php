<h3>Đổi mật khẩu</h3>
<form action="index.php?do=doimatkhau_xuly" method="post">
	<table class="Form">
		<input type="hidden" value="<?php echo $_SESSION['MaND']; ?>" name="MaNguoiDung" />
		<tr>
			<td>Mật khẩu cũ:</td>
			<td><input type="password" class="form-control" name="MatKhauCu" ></td>

		</tr>
		<tr>
			<td>Mật khẩu mới:</td>
			<td><input type="password" class="form-control" name="MatKhauMoi" ></td>

		</tr>
		<tr>
			<td>Xác nhận mật khẩu mới:</td>
			<td><input type="password" class="form-control" name="XacNhanMatKhauMoi" ></td>

		</tr>
	</table>
	
	<button type="submit" class="btn btn-primary">Cập nhật mật khẩu</button>
	

</form>