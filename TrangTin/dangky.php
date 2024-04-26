<link rel="stylesheet" href="css/style_login.css"> 
<div class="form-container">
   <form action="index.php?do=dangky_xuly" method="post" autocomplete="off">
      <h3 style="font-size: 30px;">Đăng ký tài khoản</h3>
      <input type="hidden" id="QuyenHan" name="QuyenHan" />
      <input type="text" id="HoVaTen" name="HoVaTen" required  placeholder="Họ và tên">
      <input type="text" id="TenDangNhap" name="TenDangNhap" required  placeholder="Tên đăng nhập">
      <input type="password" id="MatKhau" name="MatKhau" required  placeholder="Mật khẩu">
      <input type="password"  id="XacNhanMatKhau" name="XacNhanMatKhau" required  placeholder="Xác Nhận Mật Khẩu">
	   <input type="text" id="DiaChi" name="DiaChi" required  placeholder="Địa Chỉ">
	   <input type="text" id="SDT" name="SDT" required  placeholder="Số điện thoại">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="dangnhap.php">login now</a></p>
   </form>
</div>
