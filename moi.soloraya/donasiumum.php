<?php
session_start();
require_once('koneksi.php');
if(isset($_SESSION["login"])){
	$username = $_SESSION["login"];
	?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>MOI Soloraya</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="img_src/icon.ico">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

		<nav class="navbar navbar-default" data-spy="affix" data-offset-top="116" style="height: 115px;">
			<div class="navbar-header">
				<a class="navbar-brand" href="#"><img src="img_src/header/left.png" height="80px" style="margin: 0 auto; margin-left: 130px;"></a>
			</div>
			<ul class="nav navbar-nav" style="margin: 25px auto;">
				<li><a href="index.php" style="margin-left: 50px;">Home</a></li>
				<li><a href="berita.php">Berita</a></li>
				<li><a href="tentangkami.php">Tentang Kami</a></li>
				<li class="dropdown active">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Donasi<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="formdonasi.php?donasiumum=true">Donasi Umum</a></li>
						<li><a href="daftardonasi.php">Pilih Daftar Donasi</a></li>
					</ul>
				</li>
				<li><a href="galang.php">Galang Dana</a></li>
				<ul class="nav navbar-nav navbar-right" style="margin-right: 10px;">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome, 
						<?php 
						if(isset($_SESSION['login'])){
							echo $username;
						} else {
							echo "Guest";
						}
						?></a>
					</li>
					<li>
						<?php
						if(isset($_SESSION['login'])){
							echo "<a href=\"logout.php\"><span class=\"glyphicon glyphicon-log-out\"></span> Logout</a>";
						} else {
							echo "<a id=\"kliklogin\"href=\"#login\" style=\"margin-right: 50px\" data-toggle=\"modal\" data-target=\"#modal-login\"> Login</a>";
						}
						?>
					</li>
				</ul>
				<style>
				.navbar-nav li{
					padding: auto 1px;
				}
			</style>
		</ul>
	</nav>


	<div class="container-fluid" style="width: 80%">
		
	</div>
	<?php
	}
	else{

	}
	?>