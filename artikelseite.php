<HTML>
	<head>
		<title>artikelsuche</title>
	</head>
	<?php include ("nav.php"); ?>
	<body>
	<?php
	require_once 'dbconfig.php';
	$query = "SELECT * FROM artikel WHERE Id = ".$_GET['artikel'];
	$stmt = $DBcon->prepare( $query );
	$stmt->execute();
	while ($row=$stmt->fetch(PDO::FETCH_ASSOC) ) {
		extract($row);
	?>
	<br><br><br><br>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Artikel Stammdaten</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Artikelnummer</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['Artikelnummer']; ?>" aria-describedby="einfaches-addon1">
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Beschreibung</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['beschreibung']; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Interne Beschreibung</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Interne Beschreibung</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['internebezeichnung']; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Lagerorte</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Lagerorte</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['lagerort']; ?> uvm." aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Bestand</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Bestand</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['bestand']; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Meldebestand</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Meldebestand</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['meldebestand']; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-2 col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Preis</h4></div>
						<div class="panel-body">
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Preis</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['preis']; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Bild</h4></div>
						<div class="panel-body">
							 <a href="bilder/<?php echo $row['Artikelnummer']; ?>.gif"><img src="bilder/<?php echo $row['Artikelnummer']; ?>.gif" alt="kein Bild vorhanden" width="100%" height="auto" ></a>





<br>
							<!-- Button, der das Modal aufruft -->
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#meinModal">
                                      Bild ändern
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="meinModal" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="meinModalLabel">Neues Bild wählen</h4>
                                          </div>
                                          	<div class="modal-body">
                                            	
                                            	<?php
												$Artikelnummer = $row['Artikelnummer'];
												$end = "gif";
										
													if ( $_FILES['uploaddatei']['name']  <> "" )
													{
														$zugelassenedateitypen = array("image/png", "image/jpeg", "image/gif");
													 
														if ( ! in_array( $_FILES['uploaddatei']['type'] , $zugelassenedateitypen ))
														{
															echo "<p>Dateitype ist NICHT zugelassen</p>";
														}
														else
														{
															move_uploaded_file (
																 $_FILES['uploaddatei']['tmp_name'] ,
																 'bilder/'.$Artikelnummer.'.'.$end );
													 
															echo "<p>Hochladen war erfolgreich: ";
															echo '<a href="bilder/'.$Artikelnummer.'.'.$end.'">';
															echo 'bilder/'.$Artikelnummer.'.'.$end;
															echo '</a>';
															$pic = 'bilder/'.$Artikelnummer.'.'.$end;
															$query = "INSERT INTO artikel(bilder) VALUES('$pic')";
															$res = mysql_query($query);
														}
													}
													?>
										 
												<form name="uploadformular" enctype="multipart/form-data" action="artikelseite.php?artikel=<?php echo $row['Id']; ?>" method="post" >
												Datei: <input type="file" name="uploaddatei" size="60" maxlength="255" >
												<!--<button type="file" name="uploaddatei" size="60" maxlength="255" class="btn btn-default">Durchsuchen...</button>-->
												<!--<input type="Submit" name="submit" value="Datei hochladen">-->
												
                                            	
                                            	
                                          	</div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                                            <button type="Submit" name="submit" class="btn btn-primary">Bild Hochladen</button>
											</form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>







							 
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php } ?>
	</body>
</HTML>