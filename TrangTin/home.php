<!DOCTYPE html>
<html>
	<head>
		<title>Trang Tin Điện Tử</title>
		<meta charset="utf-8" />
	
	</head>
	<style>
		.xemthem {
			background-color: transparent; 
			border: none;
			padding: 0;
			display: inline-block;
			cursor: pointer;
			margin: 0 auto;
			width: 90%;
		}

		.xemthem a {
			margin: 10px;
			font-size: 15px;
			color: #eb7c26; 
			font-weight: bold;
			border: 1px solid #eb7c26;
			border-radius: 5px;
			padding: 10px 30px;
			text-decoration: none; 
			display: inline-block;
		}

		.xemthem a:hover{
			background: #FFEFD5;
		}

		.inner{
			margin-top: 40px;
			margin-left: 25px;
		}

		.hinhanhphim{
			object-fit: cover;
		}

		.name-book{
			display: block;
			text-align: center;
			color: #363636;
		}
	</style>
	<body>

<?php
	if(isset($_GET["limit_home"]) == true)
		{
			$_SESSION['limit_home'] += 6;
		}
		else
		{
			$_SESSION['limit_home'] = 9;
		}
		$limit_home_ok =  $_SESSION['limit_home'];
		
		
		$sql = "select s.IDSach, s.TenSach, s.MoTa, s.NamXB, s.KichThuoc, s.SoTrang,s.HinhAnh, s.DonGia, s.SoLuong,t.IDTheLoai, t.TenTheLoai
		from (sach s inner join theloai t on s.IDTheLoai = t.IDTheLoai)
		order by s.IDSach Limit 0,".$limit_home_ok;		
			  
		$danhsach = $connect->query($sql);

		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		    exit();
		}
			  
		$sql1 = "select * from (theloai t inner join sach s on t.IDTheLoai=s.IDTheLoai)";
		$danhsach2 = $connect->query($sql1);
		$count_kq = mysqli_num_rows($danhsach2);
			  	  
		while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
			  {				
				echo "<div class='inner'  >";
				  echo "<div class='khungsanpham'>";
					  echo "<div class='card'>";					
						  echo "<a href='#!'>";
							  echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . "  style='width: 190px; height: 140px;'>";
							  echo "<span class='tenphim' ></span> <br />";
						  echo "</a>";
						  
						  echo "<br /><span class=\"dongia\">". number_format($row['DonGia'])." đ</span>";
					  echo "</div>";
					  echo "<p><a class='name-book' href='index.php?do=sanpham_chitiet&id_sp=" . $row['IDSach'] . "&id_nsx=" . $row['IDTheLoai'] . "'>" . $row['TenSach'] . "</a></p>";
					  
				  echo "</div>";
				  echo "</div>";
			  }

		if($count_kq > $_SESSION['limit_home'])
		{
			echo "<td><button class=\"xemthem\"><a href='index.php?do=home&limit_home=ok'>Xem thêm </a></button></td>";
		}
?>


<?php 
	

?>
		
	</body>
</html>