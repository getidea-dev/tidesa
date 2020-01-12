<?php
	define("BASE_URL", "http://localhost/tidesa/");
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$database = "";

	$koneksi = mysqli_connect($server,$username,$password,$database) or die("koneksi ke database gagal");

	