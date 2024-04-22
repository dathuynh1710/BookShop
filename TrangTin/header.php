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
    <title>D&D Store</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Font  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet"> 

    <script type="text/javascript" src="scripts/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="scripts/basic.js"></script>
		
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="scripts/ckfinder/ckfinder.js"></script>    
    </head>

    <body>
        <!-- <header class="header">
            <div class="header-1">
                <a href="#!" class="logo"></a>
            </div>
        </header> -->
        <div class="header-area">
            <div class="container">
                <div class="user-menu">
                    <ul>
                        <li><a href="#!"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
                        <li><a href="#!"><i class="fas fa-user"></i> Đăng ký</a></li>
                    </ul>
                </div>
            </div>
        </div> 

        <div class="site-branding-area">
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <h1><a href="./"><img src="./images/logo.jpg" style="height: 60px"></a></h1>
                    </div>

                    <form class="search" action="#!">
                        <input name="keyword" placeholder="Từ khoá">
                     <button class="btn"><i class="glyphicon glyphicon-search"></i></button>
                    </form>

                </div>
            </div>
        </div>
      
        <div class="main-menu-area">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="./">Trang chủ</a></li>
                            <li><a href="./">Mua hàng</a></li>
                            <li><a href="./">Danh mục</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> 
    </body>
</html>