<?php
	$sql =	"select
	sach.IDSach,
	sach.TenSach,
	sach.MoTa,
	sach.NamXB,
	sach.KichThuoc,
	sach.SoTrang,
	sach.HinhAnh,
	sach.DonGia,
	sach.SoLuong,
	theloai.TenTheLoai,
	tacgia.TenTacGia,
	nhaxuatban.TenNhaXuatBan

	FROM
		sach
	JOIN
		theloai ON sach.IDTheLoai = theloai.IDTheLoai
	JOIN
		tacgia ON sach.IDTacGia = tacgia.IDTacGia
	LEFT JOIN
		nhaxuatban ON sach.IDNhaXuatBan = nhaxuatban.IDNhaXuatBan
	ORDER by `IDSach` DESC";
	$danhsach = $connect->query($sql);
	//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
	if (!$danhsach) {
		die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
		exit();
	}
?>
<h3>Danh sách sản phẩm</h3>
 <div class="container">
  <div class="row mb-3">
    <div class="col-3">
      <a href="index.php?do=sanpham_them"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#userModal" id="addnewbtn">Thêm SP <i class="fa fa-cart-plus"></i></button></a>
    </div>
    <div class="col-9">
      <form action="index.php?do=search_xuly" method="post" autocomplete="off">
        <div class="col-9">
          <div class="input-group input-group-lg">
            <div class="input-group-prepend">
            </div>
            <input class="search" type="text" class="form-control" name="search" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Nhập tên sách..." id="searchinput">
            <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>

          </div>
        </div>

      </form>
    </div>

  </div>
</div>

	<table class="table" id="userstable">
	<thead>
	<tr>
		<th>STT</th>
		<th >Hình Ảnh</th>
		<th >Tên Sách</th>
		<th >Giá(VNĐ)</th>
		<th width=20%>Số lượng</th>
		<th  colspan="2">Action</th>
	</tr>
	</thead>
	<?php
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
	?>
</table>
