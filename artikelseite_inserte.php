<?php
	include('dbconfig.php');
	include('nav.php');
	//Datenbank zugang
	$db = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);
	if($db){
		echo "Aktualisiert";
	}else{
		exit("Fehler ".mysqli_connect_error());
	}
	$SAP = NULL;
	$id = $_GET['Id'];
	$art = $_GET['art'];
	$art2 = $_GET['art2'];
	
	
	if($art && !$art2){
		//SAP sperre
		$sapp = $_GET['SAP'];
		
		if($sapp == "on"){
			$SAP = "1";
		}
		else{
			$SAP = "0";
		}
	
		echo "<br>ID: ";
		echo $id;
		echo "<br>Art: ";
		echo $art;
		echo "<br>SAP: ";
		echo $SAP;
		//Aktion
		//$sql_insert = 'INSERT INTO artikel WHERE Id = "'.$_GET[''].'"';
		$sql_update = 'UPDATE artikel SET SAPsperre = "'.$SAP.'" WHERE Id = "'.$id.'" ';
		//$select = 'SELECT * FROM artikel WHERE bestand < meldebestand';
	}elseif(!$art && !$art2){
		//Bestand
		$bestand = $_GET['bestand'];
		
		echo "<br>ID: ";
		echo $id;
		echo "<br>Art: ";
		echo $art;
		echo "<br>Bestand: ";
		echo $bestand;
		
		
		$sql_update = 'UPDATE artikel SET bestand = "'.$bestand.'" WHERE Id = "'.$id.'" ';
		
		
	}elseif($art && $art2){
		//Interne bezeichnung
		$internebezeichnung = $_GET['internebezeichnung'];
		
		echo "<br>ID: ";
		echo $id;
		echo "<br>Art: ";
		echo $art;
		echo "<br>Bezechnung: ";
		echo $internebezeichnung;
		
		$sql_update = 'UPDATE artikel SET internebezeichnung = "'.$internebezeichnung.'" WHERE Id = "'.$id.'" ';
		
	}elseif(!$art && $art2){
		//meldebestand
		$meldebestand = $_GET['meldebestand'];
		
		echo "<br>ID: ";
		echo $id;
		echo "<br>Art: ";
		echo $art;
		echo "<br>MB: ";
		echo $meldebestand;
		
		$sql_update = 'UPDATE artikel SET meldebestand = "'.$meldebestand.'" WHERE Id = "'.$id.'" ';
		
	}
	
	$insert = mysqli_query($db, $sql_update);
	
?>