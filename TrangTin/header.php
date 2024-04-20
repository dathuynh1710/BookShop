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
    <title>Book Shop Online  -  Master2D</title>
    <meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

    <!-- Font awesome-->
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <script type="text/javascript" src="scripts/jquery-1.4.1.js"></script>
	<script type="text/javascript" src="scripts/basic.js"></script>
		
	<script type="text/javascript" src="scripts/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="scripts/ckfinder/ckfinder.js"></script>    
    </head>

    <body>
        <!-- Khu vuc header -->
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

        <!-- Khu vuc site branding -->
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

         <!-- Khu vuc main menu -->
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