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
		<title>Trang Tin Điện Tử</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	
		<script type="text/javascript" src="scripts/jquery-1.4.1.js"></script>
		<script type="text/javascript" src="scripts/basic.js"></script>
		
		<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
		<script type="text/javascript" src="scripts/ckfinder/ckfinder.js"></script>
		
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
				<a class = "menu" href="i#!">Liên hệ</a>  
			</div>

			<div id="PhanMenu_2">
				<form action="index.php?do=search_xuly" method="post">
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