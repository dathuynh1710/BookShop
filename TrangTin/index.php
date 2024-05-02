<?php
	if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	
	include_once "cauhinh.php";
	
	include_once "thuvien.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>D&D BookStore</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		 <!-- Favicon -->
		<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
		<link rel="manifest" href="favicon/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<script type="text/javascript" src="scripts/jquery-1.4.1.js"></script>
		<script type="text/javascript" src="scripts/basic.js"></script>
		
		<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></>
		<script type="text/javascript" src="scripts/ckfinder/ckfinder.js"></script>

		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 
		<style>
			.title-giua{
				color: #333;
				font-size: 30px;
				font-weight: 700;
				line-height: 30px;
				text-transform: uppercase;
				margin-top: 60px;
				text-align: center;
			}

			.title-main{
				color: #e59285;
			}
		</style>
	</head>
	<body >
		<div id="TrangWeb">
			<div id="PhanDau">
				<img src="images/banner_book.jpg" alt="" class="banner">
			</div>
			<div id="PhanMenu1">
				<a class = "menu" href="index.php?do=home">Trang chủ</a>  
				<a class = "menu" href="#!">Cửa hàng</a>  
				<a class = "menu" href="#!">Sách</a>  
				<a class = "menu" href="index.php?do=contact">Liên hệ</a>  
			</div>

			<div id="PhanMenu_2">
				<form action="index.php?do=search_xuly" method="post" autocomplete="off">
					Tìm kiếm: <input type="text" name="search" />
					<input class="search-btn" type="submit" name="ok" value="Search" />
				</form>
			</div>

			<div id="PhanGiua">
				<div id="BenTrai">
				<?php
					if(!isset($_SESSION['QuyenHan']))
					{
						echo '<h3>Đăng Nhập</h3>';
						echo '<ul>';
							echo '<li><a " href="index.php?do=dangnhap">Đăng nhập</a></li>';
							echo '<li><a href="index.php?do=dangky">Đăng ký</a></li>';
						echo '</ul>';
					}
					// elseif ($_SESSION['QuyenHan'] == 1)
					// {
					// 	echo '<h3>Quản lý</h3>';
					// 	echo '<ul>';						
					// 	echo '<li><a href="index.php?do=themsp">Đăng sản phẩm mới</a></li>';
					// 	echo '<li><a href="index.php?do=danhsachSP">Danh sách sản phẩm</a></li>';
					// 	echo '<li><a href="index.php?do=nguoidung">Danh sách người dùng</a></li>';
					// 	echo '</ul>';
					// } 
					// else {
					// 	echo '<h3>Khách Hàng</h3>';
					// 	echo '<ul>';						
					// 	echo '<li><a href="index.php?do=dssanpham_khachhang&id='. $_SESSION['MaND'].'">Danh sách sản phẩm</a></li>';
					// 	echo '<li><a href="index.php?do=giohang_xem&id='. $_SESSION['MaND'].'">Giỏ hàng</a></li>';
					// 	echo '</ul>';
					// }
					// hiện menu hồ sơ cá nhân					
					// if(isset($_SESSION['HoTen']))
					// {
					// 	echo '<h3>Hồ sơ cá nhân</h3>';
					// 	echo '<ul>';						
					// 		echo '<li><a href="index.php?do=hosocanhan">Hồ sơ cá nhân</a></li>';
					// 		echo '<li><a href="index.php?do=doimatkhau">Đổi mật khẩu</a></li>';
					// 	echo '</ul>';
					// }
				?>

				<div>
						<iframe scrolling="no" frameborder="no" clocktype="html5" 
						style="overflow:hidden;border:0;margin:0;padding:0;width:200px;height:180px;margin-top:20px;"
						src="https://www.clocklink.com/html5embed.php?clock=042&timezone=VietNam_Hanoi&color=blue&size=356&Title=&Message=&Target=&From=2023,1,1,0,0,0&Color=blue"></iframe>					
				</div>
			</div>	
				
				<div id="Giua">
					<table  border="0" cellspacing="0" width="750" align="center" valign="top">
						<tr>
							<td>
								<?php include 'jquery.php'; ?>
							</td>
						</tr>
					</table>

					<h2 class="title-giua" ><span class="title-main">Sản phẩm</span> mới</h2>
					
					<?php
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
						include $do . ".php";
					?>
				</div>

				<div id="BenPhai" >
					<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="down" scrollamount=7 loop="infinite" height="500px">
						<img src="images/qc1.jpg" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc2.jpg" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc3.jpg" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc4.png" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc5.jpg" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc6.jpg" width="200px" height="100px" margin="0 10px"/>
						<img src="images/qc7.jpg" width="200px" height="100px" margin="0 10px"/>
					</marquee>
				</div>
				
			<div id="PhanCuoi">
				<?php include "footer.php" ?>
			</div>
		</div>
	</body>
</html>