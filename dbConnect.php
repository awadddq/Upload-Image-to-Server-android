<?php 

	define('HOST','write your hostname');
	define('USER','write your username');
	define('PASS','write your password');
	define('DB','write database name');
	
	$con = mysqli_connect(HOST,USER,PASS,DB) or die('unable to connect to db');
