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
						<H4>Artikelnummer:</H4><input name="Artikelnummer" type="number" class="form-control" placeholder="" value="" required>
						<h4>Beschreibung</h4><input name="Beschreibung" type="text" class="form-control" placeholder="" value="" required>
						<h4>Intere Bezeichnung</h4><input name="Intern" type="text" class="form-control" placeholder="" value="" required>
						<h4>Bestand</h4><input name="Bestand" type="number" class="form-control" placeholder="" value="" required>
						<h4>Meldebestand</h4><input name="Meldebestand" type="number" class="form-control" placeholder="" value="" required>
						<h4>Lagerort</h4><input name="Lagerort" type="text" class="form-control" placeholder="" value="" required>
						<h4>Preis</h4><input name="Preis" type="number" class="form-control" placeholder="" value="" required>
						<h4></h4><input type="submit" class="btn btn-primary text-right">
					</form>
				</div>
			</div>
		</div>
	</body>
</HTML> 
<?php
if($_GET['Artikelnummer'] != NULL && $_GET['Intern'] != NULL && $_GET['Beschreibung'] != NULL && $_GET['Bestand'] != NULL && $_GET['Meldebestand'] != NULL && $_GET['Lagerort'] != NULL && $_GET['Preis'] != NULL){
	require_once 'dbconfig.php';
	$servername = $host;
	$username = $user;
	$password = $pass;
	$dbname = $name;

	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO artikel (Artikelnummer, beschreibung, internebezeichnung, bestand, meldebestand, lagerort, preis) VALUES ('".$_GET['Artikelnummer']."', '".$_GET['Beschreibung']."', '".$_GET['Intern']."', '".$_GET['Bestand']."','".$_GET['Meldebestand']."', '".$_GET['Lagerort']."','".$_GET['Preis']."')";
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