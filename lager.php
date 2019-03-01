<HTML>
	<head>
		<Title>Lager | Übersicht</Title>
	</head>
	
	<body>
		<?php 
		$lager = 'class="active"';
		include("nav.php"); 
		?>
		
		<div class="container-fluid">
			<table class="table table-bordered table-condensed table-hover table-striped"><br><br>
				<tr>
					<th>Artikelnummer</th>
					<th>Beschreibung</th>
					<th>Interne Bezeichnung</th>
					<th>Bestand</th>
					<th>Lagerort</th>
				</tr>
				<tr>
					<form action="lager.php" method="get">
						<th><input name="Artikelnummer" type="number" class="form-control" placeholder="1,2,3,..." value="<?php echo htmlspecialchars($_GET['Artikelnummer']); ?>"></th>
						<th><input name="Beschreibung" type="text" class="form-control" placeholder="Text auf der Packung" value="<?php echo htmlspecialchars($_GET['Beschreibung']); ?>"></th>
						<th><input name="Intern" type="text" class="form-control" placeholder="Schlagwörter" value="<?php echo htmlspecialchars($_GET['Intern']); ?>"></th>
						<th><input name="Bestand" type="number" class="form-control" placeholder="Menge z.B. 1,2,3,..." value="<?php echo htmlspecialchars($_GET['Bestand']); ?>"></th>
						<th><input name="Lagerort" type="text" class="form-control" placeholder="1-1-1, 5-42-23,..." value="<?php echo htmlspecialchars($_GET['Lagerort']); ?>"></th>
						<input type="hidden" name="neuerBestand" type="text" class="form-control" placeholder="" value="">
						<input type="hidden" name="artikel" type="text" class="form-control" placeholder="" value="">
						<input type="hidden" name="add" type="text" class="form-control" placeholder="" value="">
						<div class="text-right"><button type="submit" class="btn btn-primary text-right"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></button></div>
					</form>
				</tr>
            
            
				<?php
					//Filter für die Beschreibung
					if($_GET['Beschreibung'] != NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel WHERE Beschreibung LIKE '%".$_GET['Beschreibung']."%' ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
					
									
				?>
                <tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?></td>	
				</tr>
                <?php
						}
					}
				?>
				<?php
					//Filter für die Artikelnummer
					if($_GET['Artikelnummer'] != NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel WHERE Artikelnummer = '".$_GET['Artikelnummer']."' ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
					
									
				?>
                <tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?></td>	
				</tr>
                <?php
						}
					}
				?>
				<?php
					//Filter für die Inter Bezeichnung
					if($_GET['Intern'] != NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel WHERE internebezeichnung LIKE '%".$_GET['Intern']."%' ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
					
									
				?>
                <tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?></td>	
				</tr>
                <?php
						}
					}
				?>
				<?php
					//Filter für den Bestand
					if($_GET['Bestand'] != NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel WHERE bestand = '".$_GET['Bestand']."' ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
					
									
				?>
                <tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?></td>	
				</tr>
                <?php
						}
					}
				?>
				<?php
					//Filter für den Lagerort
					if($_GET['Lagerort'] != NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel WHERE lagerort = '".$_GET['Lagerort']."' ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
					
									
				?>
                <tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?></td>	
				</tr>
                <?php
						}
					}
				?>
				<?php
					//falls kein Eintrag vorhanden ist
					if($_GET['Artikelnummer'] == NULL && $_GET['Intern'] == NULL && $_GET['Beschreibung'] == NULL && $_GET['Bestand'] == NULL && $_GET['Lagerort'] == NULL){
						require_once 'dbconfig.php';
						$query = "SELECT * FROM artikel ORDER BY Artikelnummer";
						$stmt = $DBcon->prepare( $query );
						$stmt->execute();
						while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
							extract($row);
				?>   
				<tr>
					<td><?php echo $row['Artikelnummer']; ?></td>
					<td><?php echo $row['beschreibung']; ?></td>
					<td><?php echo $row['internebezeichnung']; ?></td>
					<td><?php echo $row['bestand'] ?><div class="text-right"><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=1"; ?>"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></a><a href="<?php echo "Lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=".$row['bestand']."&artikel=".$row['Artikelnummer']."&add=2"; ?>"><span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span></a></div></td>
					<td><?php echo $row['lagerort'] ?><!--<div class="text-right"><a href="#"><button type="button" class="btn btn-danger text-right"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button></a></div>--></td>	
				</tr>
					<?php }} ?>
			</table>
			<?php
				if($_GET['add'] == "1"){
					echo $_GET['artikel']."<br>";
					echo $_GET['add']."<br>";				
				}
			
				if($_GET['artikel'] != NULL && $_GET['add'] == "1" ){
					
					$neuerSqlBestand = $_GET['neuerBestand'] + "1";
					
					$servername = "localhost";
					$username = "root";
					$password = $pass;
					$dbname = "lager";

					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "UPDATE artikel SET bestand='".$neuerSqlBestand."' WHERE Artikelnummer=".$_GET['artikel'];
						// use exec() because no results are returned
						$conn->exec($sql);
						echo "Erfolgreich geändert";
						}
					catch(PDOException $e)
						{
						echo $sql . "<br>" . $e->getMessage();
						}

					$conn = null;
				}
				if($_GET['artikel'] != NULL && $_GET['add'] == "2" ){
					
					$neuerSqlBestand = $_GET['neuerBestand'] -= "1";
					
					$servername = "localhost";
					$username = "root";
					$password = $pass;
					$dbname = "lager";

					try {
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
						// set the PDO error mode to exception
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$sql = "UPDATE artikel SET bestand='".$neuerSqlBestand."' WHERE Artikelnummer=".$_GET['artikel'];
						// use exec() because no results are returned
						$conn->exec($sql);
						echo "Erfolgreich geändert";
						}
					catch(PDOException $e)
						{
						echo $sql . "<br>" . $e->getMessage();
						}

					$conn = null;
				}
				
			?> 
		</div>
	</body>
</HTML>
