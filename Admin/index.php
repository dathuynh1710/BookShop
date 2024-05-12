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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	</head>
	<body>
		<div id="TrangWeb">
			<div id="PhanDau">	
			
				<?php
					if(isset($_SESSION['MaND']) && isset($_SESSION['HoTen']))
					{
					echo "<p class='hello'>Xin chào ".$_SESSION['HoTen']." &nbsp;&nbsp;|| &nbsp;&nbsp;";
						echo '<a href="index.php?do=dangxuat">Đăng xuất</a>'."&nbsp;&nbsp;</p>";
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
							echo '<li><a href="index.php?do=sanpham_them">Thêm sản phẩm mới</a></li>';
							if($_SESSION['QuyenHan'] == 1){
								echo '<li><a href="index.php?do=theloai">Danh sách thể loại</a></li>';
								echo '<li><a href="index.php?do=tacgia">Danh sách tác giả</a></li>';
								echo '<li><a href="index.php?do=nxb">Danh sách NXB</a></li>';
								echo '<li><a href="index.php?do=sanpham">Danh sách sản phẩm</a></li>';
								echo '<li><a href="index.php?do=nguoidung">Danh sách người dùng</a></li>';
							}
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
					
					
					<h3>Trang chủ</h3>
					<ul>
						<li><a href="../TrangTin/index.php" target="_blank">Trang Chủ</a></li>
						
					</ul>

					<h3>Thống kê truy cập</h3>
					<ul>
						<li>Đang online: 3</li>
						<li>Tổng lượt xem: 129</li>
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
				<?php include "footer.php" ?>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	</body>
</html>