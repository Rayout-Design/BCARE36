<?php
    // $host = "localhost";
    $host = "rayout-design.asuscomm.com";
    $port = 5678;
    $database = "rayoutde_bcare36";
    $user = "rayoutde_cms";
    $pass = "merrychristmas";
    $con = mysqli_connect($host, $user, $pass, $database);
    $mysqli = new mysqli($host, $user, $pass, $database);
    $dbh = new PDO("mysql:host=$host; dbname=$database; charset=utf8;", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $dbh->exec("set names utf8");
    
	// Check connection
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	// Change character set to utf8
    mysqli_set_charset($con,"utf8");

    date_default_timezone_set('Asia/Bangkok');
?>