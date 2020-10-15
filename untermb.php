<HTML>
	<head>
		<title>TEST</title>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>-->
	</head>
	<body><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-2">
					<?php include('nav.php'); ?>
					<div class="ud_box">
						<form id="ud_form">
							<input class="btn btn-default" type="submit" value="Aktualisieren">
						</form>
					</div>
				</div>
				<div class="col-md-6">
					<div class="ud_box" id="ud_output">
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
						$select = 'SELECT * FROM artikel WHERE bestand < meldebestand && SAPsperre = 0';
						$insert = mysqli_query($db, $select);
						?>
						
						<table class="table table-bordered table-condensed table-hover table-striped">
							<tr>
								<th>Artikelnummer</th>
								<th>Beschreibung</th>
								<th>Interne Bezeichnung</th>
								<th>Bestand</th>
								<th>Meldebestand</th>
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
					<script>
						
						$('#ud_form').submit(function(event){
							event.preventDefault();
							$.ajax({
								type: 'GET',
								url: 'insert_data.php',
								data: $(this).serialize(),
								success: function(data){
									$('#ud_output')[0].reset();
									$('#ud_output').html(data);
								}
							});
							$('#ud_form')[0].reset();
						});
						
					</script>
				</div>
			</div>
		</div>
	</body>
</HTML>