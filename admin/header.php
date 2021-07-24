<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="dist/css/home_admin.css">
	<link rel="stylesheet" type="text/css"  href="bower_components/bootstrap/dist/css/bootstrap.min.css">
	

	<link rel="stylesheet" type="text/css" href="bower_components/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css"  href="bower_components/datatables/media/css/jquery.dataTables.min.css">
</head>
<body>
	<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: index.php");
 }
 ?>
	<?php
    require_once("connection.php");
    error_reporting(2);
  ?>
	<nav class="navbar navbar-default sidebar navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<h3 style="color: brown;">Welcome Administrator Page</h3>
				
			
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- <form class="navbar-form navbar-left" method="GET" role="search">
				<div class="form-group">
					<input type="text" name="q" class="form-control" placeholder="Search">
				</div>
				<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
			</form> -->
			<ul class="nav navbar-nav navbar-right">
				<li><a href="http://www.pingpong-labs.com" target="_blank">Visit Site</a></li>
				<li class="dropdown ">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
						Account
						<span class="caret"></span></a>
						<ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="fa fa-user fa-fw"></i>Thông tin người dùng</a>
                            </li>
                            <li><a href="#"><i class="fa fa-gear fa-fw"></i>Cài đặt</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i>Đăng xuất</a>
                            </li>
                        </ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<div class="container-fluid main-container">
  		<div class="col-md-2 sidebar">
  			<div class="row">
	<!-- uncomment code for absolute positioning tweek see top comment in css -->
	<div class="absolute-wrapper"> </div>
	<!-- Menu -->
	<div class="side-menu">
		<nav class="navbar navbar-default" role="navigation">
			<!-- Main Menu -->
			<div class="side-menu-container">
				<ul class="nav navbar-nav">

					<li style="" class="active"><a style="color: white;background: #15aeb4;" href="#"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
					<li><a href="category-list.php"><span class="glyphicon glyphicon-plane"></span> Danh mục sản phẩm</a></li>
					<li><a href="brand-list.php"><span class="glyphicon glyphicon-cloud"></span> Thương hiệu sản phẩm</a></li>

					<!-- Dropdown-->
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl1">
							<span class="glyphicon glyphicon-signal"></span> Sản phẩm <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl1" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="product-list.php">Danh sách sản phẩm</a></li>
									<li><a href="product_add.php">Thêm sản phẩm</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl2">
							<span class="fa fa-shopping-cart"></span> Đơn Hàng <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl2" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="cart-list.php">Danh sách đơn hàng</a></li>
									<li><a href="product_add.php">Đơn hàng mới</a></li>
								</ul>
							</div>
						</div>
					</li>

					<li><a href="user-list.php" class="glyphicon glyphicon-user"><span ></span> Quản lý người dùng</a></li>
					<li class="panel panel-default" id="dropdown">
						<a data-toggle="collapse" href="#dropdown-lvl3">
							<span class="glyphicon glyphicon-comment"></span>Liên hệ <span class="caret"></span>
						</a>

						<!-- Dropdown level 1 -->
						<div id="dropdown-lvl3" class="panel-collapse collapse">
							<div class="panel-body">
								<ul class="nav navbar-nav">
									<li><a href="contact-list.php">Tin nhắn liên hệ</a></li>
									<li><a href="contact-new.php">Tin nhắn chưa đọc</a></li>
								</ul>
							</div>
						</div>
					</li>
					<li><a href="slide.php" class="glyphicon glyphicon-th"><span ></span> Quản lý Slide Show</a></li>


				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>

	</div>
 </div>
</div>
