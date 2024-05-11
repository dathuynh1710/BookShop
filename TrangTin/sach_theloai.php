<head>
<link rel="stylesheet" type="text/css" href="css/style_khungsp.css" />
</head>

<?php		
		if(isset($_GET["limit"]) == true)
		{
			$_SESSION['limit'] += 3;
		}
		else
		{
			$_SESSION['limit'] = 6;
		}
		$limit_ok =  $_SESSION['limit'];
		//echo $limit_ok;
		
		$IdTheLoai = $_GET["id_tl"];

		$sql1 =  "select * from theloai where IDTheLoai='" . $IdTheLoai . "'"; 
		$danhsach1 = $connect->query($sql1);
		$row1 = $danhsach1->fetch_array(MYSQLI_ASSOC);
    
        $sql2 =  "select * from sach where IDTheLoai='" . $IdTheLoai . "' ORDER by `IDSach` DESC  LIMIT 0, ".$limit_ok; 
		
		$danhsach = $connect->query($sql2);
		
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}


		$sql3 =  "select * from sach where IDTheLoai='" . $IdTheLoai . "'"; 
		$danhsach2 = $connect->query($sql3);
		$count_sp_tl = mysqli_num_rows($danhsach2);		
		
		
		while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
		{				
			echo "<div class='inner'>";
				  echo "<div class='khungsanpham'>";
					  echo "<div class='card'>";					
						  echo "<a href='index.php?do=sanpham_chitiet&id_sp=" . $row['IDSach'] . "&id_nsx=" . $row['IDTheLoai']. "'>";
							  echo "<img style='width: 235px;
							  height: 137px;' class='hinhanhphim' src=" . $row["HinhAnh"] . "  >";
							  echo "<span class='tenphim' ></span> <br />";
						  echo "</a>";
						  
						  echo "<span class=\"dongia\">". number_format($row['DonGia'])." đ</span>";
					  echo "</div>";
					  echo "<p><a class='name-book' href='index.php?do=sanpham_chitiet&id_sp=" . $row['IDSach'] . "&id_nsx=" . $row['IDTheLoai'] . "'>" . $row['TenSach'] . "</a></p>";
					  
				  echo "</div>";
				  echo "</div>";
		}
		if($count_sp_tl > $_SESSION['limit'])
		{
			echo "<h3 class=\"xemthem\"><a href='index.php?do=sach_theloai&id_tl=" . $row1['IDTheLoai'] . "&limit=ok'>Xem thêm các sản phẩm của <b>". $row1['TenTheLoai']."</b></a></h3></td>";
		}
?>
</table>