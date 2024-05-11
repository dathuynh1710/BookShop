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

		<!-- font-awesome -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
		
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
	</head>
	<body >
		<div id="TrangWeb">
			<div id="PhanDau">
				<img src="images/banner.jpg" alt="" class="banner">
			</div>
			<div id="PhanMenu1">
				<a class = "menu" href="index.php?do=home">Home</a>  
				<a class = "menu" href="../admin/index.php">Admin</a>   
				<a class = "menu" href="index.php?do=contact">Contact</a>  
			</div>

			<div id="PhanMenu_2">
				<form action="index.php?do=search_xuly" method="post" autocomplete="off">
					 <input class="search" type="text" name="search" placeholder ="Nhập nội dung cần tìm..."/>
					<input class="search-btn" type="submit" name="ok" value="Search" />
				</form>
			</div>

			<div id="PhanGiua">
				<div id="BenTrai">
				
				<h3>Thể loại</h3>
					<?php
						$sql = "select * from `theloai` WHERE 1";
						$danhsach = $connect->query($sql);
						//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
						if (!$danhsach) {
							die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
							exit();
						}
					?>
					<div id="menudung">
					  <ul>						
							<?php
								while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 
								{
    								echo "<li><a href='index.php?do=sach_theloai&id_tl=" . $row['IDTheLoai'] . "'>" . $row['TenTheLoai'] . "</a></li>";   
  								}
							?>  
					   </ul>
						
					</div>	
					
				
				<div>	
						<iframe scrolling="no" frameborder="no" clocktype="html5" style="overflow:hidden;border:0;margin:0;padding:0;width:200px;height:180px;margin-top:20px;"src="https://www.clocklink.com/html5embed.php?clock=042&timezone=VietNam_HoChiMinhCity&color=purple&size=356&Title=&Message=&Target=&From=2024,1,1,0,0,0&Color=purple"></iframe>
				</div>
			</div>	
				
				<div id="Giua">
					<div class="info-promo">
						<table class="jquery"  border="0" cellspacing="0" width="750" align="center" valign="top">
							<tr>
								<td>
									<?php include 'jquery.php'; ?>
								</td>
							</tr>
						</table>

						<div class="promo-area">
							<div class="row">
								<div class="info-1">
									<div class="single-promo promo1">
										<i class="fas fa-sync"></i>
										<p>Hoàn trả 30 ngày</p>
									</div>
								</div>
								<div class="info-2">
									<div class="single-promo promo2">
										<i class="fas fa-truck"></i>
										<p>Miễn phí vận chuyển</p>
									</div>
								</div>
								<div class="info-3">
									<div class="single-promo promo3">
										<i class="fas fa-lock"></i>
										<p>Thanh toán an toàn</p>
									</div>
								</div>
								<div class="info-4">
									<div class="single-promo promo4">
										<i class="fas fa-gift"></i>
										<p>Quà tặng khuyến mãi</p>
									</div>
								</div>
							</div>
						</div>
					</div>


					<h2 class="title-giua" ><span class="title-main">Sản phẩm</span> mới</h2>
					
					<?php
						$do = isset($_GET['do']) ? $_GET['do'] : "home";
						include $do . ".php";
					?>
				</div>

				<div id="BenPhai" >
					<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="down" scrollamount="3" loop="infinite" height="700px">
						<img src="images/qc1.jpg" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc2.jpg" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc3.jpg" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc4.png" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc5.jpg" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc6.jpg" width="200px" height="200px" margin="0 10px"/>
						<img src="images/qc7.jpg" width="200px" height="200px" margin="0 10px"/>
					</marquee>
				</div>
				
			<div id="PhanCuoi">
				<?php include "footer.php" ?>
			</div>
		</div>
	</body>
</html>