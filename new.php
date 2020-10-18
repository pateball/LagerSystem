<HTML>
	<head>
		<title>Lager | Neuer Artikel</title>
	</head>
	<?php 
	$neuerArtikel = 'class="active"';
	include ("nav.php");
	require_once 'dbconfig.php';
	$query = "SELECT MAX(Artikelnummer) FROM artikel";
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
		extract($row);	
	?>
	<body><br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<form action="new.php" method="get">
						<H4>Artikelnummer:</H4><input name="Artikelnummer" type="number" class="form-control" placeholder="" value="<?php echo $row['MAX(Artikelnummer)']+1;?>" required>
						<h4>Beschreibung</h4><input name="Beschreibung" type="text" class="form-control" placeholder="" value="" required>
						<h4>Intere Bezeichnung</h4><input name="Intern" type="text" class="form-control" placeholder="" value="">
						<h4>Bestand</h4><input name="Bestand" type="number" class="form-control" placeholder="" value="" required>
						<h4>Meldebestand</h4><input name="Meldebestand" type="number" class="form-control" placeholder="" value="" required>
						<h4>Lagerort</h4><input name="Lagerort" type="text" class="form-control" placeholder="" value="" required>
						<h4>Preis</h4><input name="Preis" type="text" class="form-control" placeholder="" value="" required>
						<input name="Einheit" type="text" class="form-control" placeholder="" value="" required>
						<h4></h4><input type="submit" class="btn btn-primary text-right">
					</form>
				</div>
			</div>
		</div>
	</body>
</HTML> 
<?php

$suchmuster = array();
/*$suchmuster[0] = '"';
$suchmuster[1] = '§';
$suchmuster[2] = '$';
$suchmuster[3] = '%';
$suchmuster[4] = '&';
$suchmuster[5] = '/';
$suchmuster[6] = '(';
$suchmuster[7] = ')';
$suchmuster[8] = '=';
$suchmuster[9] = '?';
$suchmuster[10] = 'ß';
$suchmuster[11] = '{';
$suchmuster[12] = '}';
$suchmuster[13] = '[';
$suchmuster[14] = ']';
$suchmuster[15] = '+';
$suchmuster[16] = '*';
$suchmuster[17] = '#';
$suchmuster[18] = "'";
$suchmuster[19] = '-';
$suchmuster[20] = '_';
$suchmuster[21] = ':';
$suchmuster[22] = ';';
$suchmuster[23] = ',';
$suchmuster[24] = '€';
$suchmuster[25] = '@';*/


$ersetzung = array();
/*$ersetzung[0] = '&quot;';
$ersetzung[1] = '&sect;';
$ersetzung[2] = '&dollar;';
$ersetzung[3] = '&percnt;';
$ersetzung[4] = '&amp;';
$ersetzung[5] = '&sol;';
$ersetzung[6] = '&lpar;';
$ersetzung[7] = '&rpar;';
$ersetzung[8] = '&equals;';
$ersetzung[9] = '&quest;';
$ersetzung[10] = '&szlig;';
$ersetzung[11] = '&lbrace;';
$ersetzung[12] = '&rbrace;';
$ersetzung[13] = '&lbrack;';
$ersetzung[14] = '&rbrack;';
$ersetzung[15] = '&plus;';
$ersetzung[16] = '&ast;';
$ersetzung[17] = '&num;';
$ersetzung[18] = '&lsquo;';
$ersetzung[19] = '&ndash;';
$ersetzung[20] = '&lowbar;';
$ersetzung[21] = '&colon;';
$ersetzung[22] = '&semi;';
$ersetzung[23] = '&comma;';
$ersetzung[24] = '&euro;';
$ersetzung[25] = '&commat;';*/



if($_GET['Artikelnummer'] != NULL && $_GET['Intern'] != NULL && $_GET['Beschreibung'] != NULL && $_GET['Bestand'] != NULL && $_GET['Meldebestand'] != NULL && $_GET['Lagerort'] != NULL && $_GET['Preis'] != NULL && $_GET['Einheit'] != NULL){
	require_once 'dbconfig.php';
	$servername = $host;
	$username = $user;
	$password = $pass;
	$dbname = $name;

	try {
		$newBeschreibung = preg_replace($suchmuster,$ersetzung,$_GET['Beschreibung']);
		$newIntern = preg_replace($suchmuster,$ersetzung,$_GET['Intern']);
		$newLagerort = preg_replace($suchmuster,$ersetzung,$_GET['Lagerort']);
		$newEinheit = preg_replace($suchmuster,$ersetzung,$_GET['Einheit']);
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		// set the PDO error mode to exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "INSERT INTO artikel (Artikelnummer, beschreibung, internebezeichnung, bestand, meldebestand, lagerort, preis, einheit) VALUES ('".$_GET['Artikelnummer']."', '".$newBeschreibung."', '".$newIntern."', '".$_GET['Bestand']."','".$_GET['Meldebestand']."', '".$newLagerort."','".$_GET['Preis']."','".$newEinheit."')";
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
}
?> 
