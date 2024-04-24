<?php
	// Hủy SESSION
	unset($_SESSION['MaND']);
	unset($_SESSION['HoTen']);
	unset($_SESSION['QuyenHan']);
	
	header("Location: index.php");
?>