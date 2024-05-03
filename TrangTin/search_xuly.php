<head>
	<link rel="stylesheet" type="text/css" href="css/style_khungsp.css" />
</head>
<?php
	if (isset($_REQUEST['ok'])) {
            // Gán hàm addslashes để chống sql injection
        $search = addslashes($_POST['search']);
		$sql = "select s.IDSach, s.TenSach, s.MoTa, s.NamXB, s.KichThuoc, s.SoTrang,s.HinhAnh, s.DonGia, s.SoLuong,t.IDTheLoai, t.TenTheLoai
		from (sach s inner join theloai t on s.IDTheLoai = t.IDTheLoai) where TenSach like '%$search%'";		
        $danhsach = $connect->query($sql);
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}			
			
        $num = mysqli_num_rows($danhsach);
 
		if (empty($search)) {
			echo "Hãy nhập dữ liệu vào ô tìm kiếm";
		} else {
			if ($num > 0 && $search != "") {
				echo "<div style='margin-top: 40px;'>";
					echo "<h3> Có $num kết quả trả về với từ khóa <b>$search</b> <br /></h3>";					
					while ($row = $danhsach->fetch_array(MYSQLI_ASSOC)) 		
					{				
						echo "<div class='inner'>";
						echo "<div class='khungsanpham'>";
							echo "<div class='card'>";					
								echo "<a href='index.php?do=sanpham_chitiet&id_sp=" . $row['IDSach'] . "&id_nsx=" . $row['IDTheLoai']. "'>";
									echo "<img class='hinhanhphim' src=" . $row["HinhAnh"] . "  >";
									echo "<span class='tenphim' ></span> <br />";
								echo "</a>";
								
								echo "<span class=\"dongia\">". number_format($row['DonGia'])." đ</span>";
							echo "</div>";
							echo "<p><a class='name-book' href='index.php?do=sanpham_chitiet&id_sp=" . $row['IDSach'] . "&id_nsx=" . $row['IDTheLoai'] . "'>" . $row['TenSach'] . "</a></p>";
							
						echo "</div>";
						echo "</div>";
					}
				echo "</div>";
			} else 
				echo "Không tìm thấy kết quả!";
		}            
	}
?>   