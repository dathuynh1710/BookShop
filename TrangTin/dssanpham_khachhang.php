<?php
	$sql = "SELECT * FROM `sach` WHERE 1";
	$danhsach = $connect->query($sql);
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<style>
    .DanhSach a img {
        border: 1px solid gray;
        padding: 10px;
    }

    .DanhSach a img:hover {
        cursor: pointer;
        background-color: red;
    }
</style>
<h3>Danh sách sản phẩm</h3>
<table class="DanhSach" cellspacing="0" width="590" align="center" valign="top">
    <?php
    // $count = 0;
    // while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {
    //     if ($count % 2 == 0) {
    //         echo "<tr style='text-align: center' bgcolor='#ffffff' onmouseover='this.style.background=\"#dee3e7\"' onmouseout='this.style.background=\"#ffffff\"'>";
    //     }

    //     echo "<td>";
    //     echo "<img style='display:block; margin: 0 auto;' src='" . $dong["AnhSP"] . "' width='100' height='100'><br>";
    //     echo "<strong>" . $dong["TenSP"] . "</strong><br>";
    //     echo "Số lượng: " . $dong["SoLuong"] . "<br>";
    //     echo "Giá: " . number_format($dong["Gia"], 0, '.', '.'). "<br>";
    //     echo "<a title='mua hàng' href='index.php?do=khachhang_mua&id=" . $dong["MaSP"] . "&hoten=". $_SESSION['HoTen'] ."' onclick='return confirm(\"Bạn có muốn mua sản phẩm " . $dong['TenSP'] . " không?\")'><img src='images/active.png' /></a>";
    //     echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    //     echo "<a title='thêm vào giỏ hàng' href='index.php?do=giohang&id=" . $dong["MaSP"] . "&ten=" . urlencode($dong["TenSP"]) . "&gia=" . $dong['Gia'] . "&sl=1&anh=". $dong['AnhSP']."' onclick='return confirm(\"Bạn có muốn thêm sản phẩm " . $dong['TenSP'] . " vào giỏ hàng không?\")'><img src='images/giohang.png' /></a>";
    //     echo "</td>";

    //     // kiểm tra xem hàng đã đầy 2 ô chưa
    //     if ($count % 2 == 1) {
    //         echo "</tr>";
    //     }

    //     $count++;
    // }

    // // Nếu số lượng món là số lẻ, thêm một ô trống để hoàn thành hàng cuối cùng
    // if ($count % 2 == 1) {
    //     echo "<td></td></tr>";
    // }
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
	
    ?>
</table>
