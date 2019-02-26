<HTML>
	<head>
		<title>Lager | Neuer Artikel</title>
	</head>
	<?php 
	$neuerArtikel = 'class="active"';
	include ("nav.php");
	?>
	<body><br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<form action="new.php" method="get">
						<H4>Artikelnummer:</H4><input name="Artikelnummer" type="number" class="form-control" placeholder="" value="">
						<h4>Beschreibung</h4><input name="Beschreibung" type="text" class="form-control" placeholder="" value="">
						<h4>Intere Bezeichnung</h4><input name="Intern" type="text" class="form-control" placeholder="" value="">
						<h4>Bestand</h4><input name="Bestand" type="number" class="form-control" placeholder="" value="">
						<h4>Lagerort</h4><input name="Lagerort" type="text" class="form-control" placeholder="" value="">
						<h4></h4><input type="submit" class="btn btn-primary text-right">
					</form>
				</div>
			</div>
		</div>
	</body>
</HTML> 
<?php
if($_GET['Artikelnummer'] != NULL && $_GET['Intern'] != NULL && $_GET['Beschreibung'] != NULL && $_GET['Bestand'] != NULL && $_GET['Lagerort'] != NULL){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "lager";

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO users (Artikelnummer, beschreibung, internebezeichnung, bestand, lagerort) VALUES ('".$_GET['Artikelnummer']."', '".$_GET['Beschreibung']."', '".$_GET['Intern']."', '".$_GET['Bestand']."', '".$_GET['Lagerort']."')";
		// use exec() because no results are returned
		$conn->exec($sql);
		echo "New record created successfully";
		}
	catch(PDOException $e)
		{
		echo $sql . "<br>" . $e->getMessage();
		}

	$conn = null;
}
?> 