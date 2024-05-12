<<?php
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
					$stt = 1;
                    while ($dong = $danhsach->fetch_array(MYSQLI_ASSOC)) {	
                        echo "<tr>";
                            echo "<td>" . $stt . "</td>";
                            echo "<td><img src='".$dong['HinhAnh']."' width='100'/></td>";
                            echo "<td > " . $dong["TenSach"] . "</td>";
                            echo "<td>" . number_format($dong["DonGia"], 0, '.', '.') . "</td>";
                            echo "<td >" . $dong["SoLuong"] . "</td>";					
                            echo "<td align='center'><a href='index.php?do=sanpham_sua&id=" . $dong["IDSach"] . "' class='link-dark'><i class='fa-solid fa-pen-to-square fs-5 me-3'></i></a></td>";
                            echo "<td align='center'><a href='index.php?do=sanpham_xoa&id=" . $dong["IDSach"] . "' class='link-dark' onclick='return confirm(\"Bạn có muốn xóa sách " . $dong['TenSach'] . " không?\")'><i class='fa-solid fa-trash fs-5'></i></a></td>";

                            echo "</tr>";
                        $stt++;
		}
				echo "</div>";
			} else 
				echo "Không tìm thấy kết quả!";
		}            
	}
?>   