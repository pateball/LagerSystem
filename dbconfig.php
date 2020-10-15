<?php
	//Edit this
	
	$host = "localhost";
	$user = "lager";
	$pass = "zeAAL5a8XjLx2RXX";
	$name = "lager";
	
	//do not edit this
	
	$DBhost = $host;
	$DBuser = $user;
	$DBpass = $pass;
	$DBname = $name;
	
	try{
		
		$DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		$DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	}catch(PDOException $ex){
		
		die($ex->getMessage());
	}
	
	
?>
