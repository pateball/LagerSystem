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
					<a class="btn btn-default" href="<?php echo $_SERVER['HTTP_REFERER']; ?>" role="button">Back</a>
					<div class="panel panel-default">
						<div class="panel-heading" ><h4>Artikel Stammdaten</h4></div>
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
							<div class="ud_box">
								<form id="ud_form" class="forms1">
									<div class="checkbox">
										<label>
											<input name="SAP" type="checkbox" <?php if($row['SAPsperre'] == 1){echo "checked";} ?>>
												SAP Sperre
										</label>
										<input name="Id" type="hidden" value="<?php echo $row['Id']; ?>" required>
										<input name="art" type="hidden" value="1" required>
										<input name="art2" type="hidden" value="" required>	
										<input class="btn btn-default" type="submit" value="Aktualisieren">
									</div>
									<div class="ud_box" id="ud_output1"></div>
								</form>
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
							
							
							
							
							<div class="ud_box">
								<form id="ud_form" class="forms3">
									<div class="input-group">
										<span class="input-group-addon" id="einfaches-addon1">Interne Beschreibung</span>
										<input type="text" class="form-control" name="internebezeichnung" value="<?php echo $row['internebezeichnung']; ?>" aria-describedby="einfaches-addon1">
									</div>
									<input name="Id" type="hidden" value="<?php echo $row['Id']; ?>" required>
									<input name="art" type="hidden" value="1" required>	
									<input name="art2" type="hidden" value="1" required>										
									<input class="btn btn-default" type="submit" value="Aktualisieren">
									<div class="ud_box" id="ud_output3"></div>
								</form>
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
							<div class="ud_box">
								<form id="ud_form" class="forms2">
									<div class="input-group">
										<span class="input-group-addon" id="einfaches-addon1">Bestand</span>
										<input name="bestand" type="text" class="form-control" value="<?php echo $row['bestand']; ?>" aria-describedby="einfaches-addon1">
									</div>
									<input name="Id" type="hidden" value="<?php echo $row['Id']; ?>" required>
									<input name="art" type="hidden" value="" required>			
									<input name="art2" type="hidden" value="" required>										
									<input class="btn btn-default" type="submit" value="Aktualisieren">
									<div class="ud_box" id="ud_output2"></div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Meldebestand</h4></div>
						<div class="panel-body">
										



										
							
							<div class="ud_box">
								<form id="ud_form" class="forms4">
									<div class="input-group">
										<span class="input-group-addon" id="einfaches-addon1">Meldebestand</span>
										<input type="text" name="meldebestand" class="form-control" value="<?php echo $row['meldebestand']; ?>" aria-describedby="einfaches-addon1">
									</div>
									<input name="Id" type="hidden" value="<?php echo $row['Id']; ?>" required>
									<input name="art" type="hidden" value="" required>			
									<input name="art2" type="hidden" value="1" required>										
									<input class="btn btn-default" type="submit" value="Aktualisieren">
									<div class="ud_box" id="ud_output4"></div>
								</form>
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
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Einheit</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['einheit']; ?>" aria-describedby="einfaches-addon1">
							</div>
							<div class="input-group">
								<span class="input-group-addon" id="einfaches-addon1">Bestandswert</span>
								<input type="text" class="form-control" disabled value="<?php echo $row['bestand'] * $row['preis']; echo "€"; ?>" aria-describedby="einfaches-addon1">
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Produkt Bild</h4></div>
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
										
													if ( $_FILES['uploaddatei']['name']  <> "" ){
														$zugelassenedateitypen = array("image/png", "image/jpeg", "image/gif", "image/jpg");
													 
														if ( ! in_array( $_FILES['uploaddatei']['type'] , $zugelassenedateitypen )){
															echo "<p>Dateitype ist NICHT zugelassen</p>";
														}
														else{
															move_uploaded_file (
																 $_FILES['uploaddatei']['tmp_name'] ,
																 'bilder/'.$Artikelnummer.'.'.$end 
															);
													 
															echo "<p>Hochladen war erfolgreich: ";
															echo '<a href="bilder/'.$Artikelnummer.'.'.$end.'">';
															echo 'bilder/'.$Artikelnummer.'.'.$end;
															echo '</a>';
															$pic = 'bilder/'.$Artikelnummer.'.'.$end;
															//$query = "INSERT INTO artikel WHERE Artikelnummer = "'.$Artikelnummer.'" VALUES('$pic')";
															//$res = mysql_query($query);
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
	<script>
		$('.forms1').submit(function(event){
			event.preventDefault();
			$.ajax({
				type: 'GET',
				url: 'artikelseite_inserte.php',
				data: $(this).serialize(),
				success: function(data){
					//$('#ud_output1').html(data); //Debug
				}
			});
			//$('#ud_form')[0].reset();
		});
		$('.forms2').submit(function(event){
			event.preventDefault();
			$.ajax({
				type: 'GET',
				url: 'artikelseite_inserte.php',
				data: $(this).serialize(),
				success: function(data){
					//$('#ud_output2').html(data); //Debug
				}
			});
			//$('#ud_form')[0].reset();
		});
		$('.forms3').submit(function(event){
			event.preventDefault();
			$.ajax({
				type: 'GET',
				url: 'artikelseite_inserte.php',
				data: $(this).serialize(),
				success: function(data){
					//$('#ud_output3').html(data); //Debug
				}
			});
			//$('#ud_form')[0].reset();
		});
		$('.forms4').submit(function(event){
			event.preventDefault();
			$.ajax({
				type: 'GET',
				url: 'artikelseite_inserte.php',
				data: $(this).serialize(),
				success: function(data){
					//$('#ud_output4').html(data); //Debug
				}
			});
			//$('#ud_form')[0].reset();
		});
	</script>
</HTML>
