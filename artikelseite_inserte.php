<?php
	include('dbconfig.php');
	include('nav.php');
	//Datenbank zugang
	$db = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);
	if($db){
		echo "Aktualisiert";
	}else{
		exit("ALLES KACKE !!!!!! ".mysqli_connect_error());
	}
	$id = $_GET['Id'];
	$SAP = $_GET['SAP'];
	echo "<br>ID: ";
	echo $id;
	echo "<br>SAP: ";
	echo $SAP
	//Aktion
	//$sql_insert = 'INSERT INTO artikel WHERE Id = "'.$_GET[''].'"';
	//$sql_update = 'UPDATE artikel SET SAPsperre "'.$_GET[''].'" ';
	//$select = 'SELECT * FROM artikel WHERE bestand < meldebestand';
	//$insert = mysqli_query($db, $select);
	
?>