<?php
	include('dbconfig.php');
	include('nav.php');
	//Datenbank zugang
	$db = mysqli_connect($DBhost, $DBuser, $DBpass, $DBname);
	if($db){
		
	}else{
		exit("ALLES KACKE !!!!!! ".mysqli_connect_error());
	}
	//Aktion
	$select = 'SELECT * FROM artikel WHERE bestand < meldebestand';
	$insert = mysqli_query($db, $select);
	
	
?>
<br><br><br>
<html>
	<head>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<table class="table table-bordered table-condensed table-hover table-striped">
					<tr>
						<th>Artikelnummer</th>
						<th>Beschreibung</th>
						<th>Interne Bezeichnung</th>
						<th>Bestand</th>
						<th>Meldebestand</th><!--NEU-->
						<th>Lagerort</th>
					</tr>
					<?php while($row = mysqli_fetch_array($insert)){ ?>
					<tr>
						<td><a href="artikelseite.php?artikel=<?php echo $row['Id']; ?>"><?php echo $row['Artikelnummer']; ?></a></td>
						<td><a href="artikelseite.php?artikel=<?php echo $row['Id']; ?>"><?php echo $row['beschreibung']; ?></a></td>
						<td><?php echo $row['internebezeichnung']; ?></td>
						<td><?php echo $row['bestand'] ?>					</td>
						<td><?php echo $row['meldebestand']; ?></td>
						<td><a href="lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=<?php echo $row['lagerort']; ?>&neuerBestand=&artikel=&add="><?php echo $row['lagerort'] ?></a></td>	
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>
	</body>
</html>	
				
	