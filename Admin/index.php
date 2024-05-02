<?php
	//session_set_cookie_params(30); // 1800 giây = 30 phút
	session_start();
	
	
	include_once "cauhinh.php";
	
	include_once "thuvien.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Trang Tin Điện Tử</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script src="scripts/ckeditor/ckeditor.js"></script>
	</head>
	<body>
		<div id="TrangWeb">
			<div id="PhanDau">	
			
				<?php
					if(isset($_SESSION['MaND']) && isset($_SESSION['HoTen']))
					{
					echo "<br><br><br><br><br>Xin chào ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
						echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;";
					}
				?>				
			</div>
			<div id="PhanGiua">
				<div id="BenTrai">
					<?php
					//hiện menu quản lý
					if(!isset($_SESSION['MaND']))
					{
						echo '<h3>Quản lý</h3>';
							echo '<ul>';
								echo '<li><a href="index.php?do=dangnhap">Đăng nhập</a></li>';
								echo '<li><a href="index.php?do=dangky">Đăng ký</a></li>';
							echo '</ul>';
					}
					else
					{
						echo '<h3>Quản lý</h3>';
						echo '<ul>';						
						echo '<li><a href="index.php?do=theloai">Danh sách thể loại</a></li>';
						echo '<li><a href="index.php?do=tacgia">Danh sách tác giả</a></li>';
						echo '<li><a href="index.php?do=nxb">Danh sách NXB</a></li>';
						echo '<li><a href="index.php?do=sanpham_them">Thêm sản phẩm mới</a></li>';
						echo '<li><a href="index.php?do=sanpham">Danh sách sản phẩm</a></li>';
						echo '<li><a href="index.php?do=nguoidung">Danh sách người dùng</a></li>';
						echo '</ul>';
					}


					//hiện menu hồ sơ cá nhân					
					if(isset($_SESSION['MaND']))
					{
						echo '<h3>Hồ sơ cá nhân</h3>';
						echo '<ul>';						
							echo '<li><a href="index.php?do=hosocanhan">Hồ sơ cá nhân</a></li>';
							echo '<li><a href="index.php?do=doimatkhau">Đổi mật khẩu</a></li>';
						echo '</ul>';
					}								
					?>
					
					
					<h3>Chức năng khác</h3>
					<ul>
						<li><a href="../TrangTin/index.php">Trang Chủ</a></li>
						<li><a href="">.......</a></li>
					</ul>
					
					
				</div>
				<div id="BenPhai">
					<?php
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
						
						include $do . ".php";
					?>
				</div>
			</div>
			<div id="PhanCuoi">
				<div class="lienhe">Liên hệ: D&DBookStore@agu.edu.vn</div>
			</div>
		</div>
	</body>
</html>