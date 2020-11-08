

<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"  />
<link href="icon.ico" rel="shortcut icon"></link>	


<style>
body {
	background-color: #2e3339;
	color: #fff;
}
.table-striped > tbody > tr:nth-of-type(2n+1)-dark {
    id="backgroundColorOne"; 
    background-color: #3f4143;
}
.table-striped > tbody > tr:nth-of-type(2n)-dark {
    background-color: #2e3339;
}
.navbar-default-dark {
  background-color: #3f4143;
  border-color: #000;
}
.panel-default > .panel-heading-dark {
  color: #fff;
  background-color: #3f4143;
  border-color: #000;
}
.panel-default > .panel-body-dark {
  color: #fff;
  background-color: #2e3339;
  border-color: #000;
}
</style>

	
	
<nav class="navbar navbar-default navbar-fixed-top" id="headArtikelStammdaten">
  <div class="container-fluid" id="headArtikelStammdaten">
    <!-- Titel und Schalter werden für eine bessere mobile Ansicht zusammengefasst -->
    <div class="navbar-header" id="headArtikelStammdaten">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Navigation ein-/ausblenden</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Index</a>
    </div>

    <!-- Alle Navigationslinks, Formulare und anderer Inhalt werden hier zusammengefasst und können dann ein- und ausgeblendet werden -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li <?php //echo $lager; ?> ><a href="lager.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=&neuerBestand=&artikel=&add=">Lager <span class="sr-only">(aktuell)</span></a></li>
		<li <?php //echo $neuerArtikel; ?> ><a href="new.php?Artikelnummer=&Beschreibung=&Intern=&Bestand=&Lagerort=">Neuer Artikel</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group" action="lager.php" method="get">
			<input type="hidden" name="Artikelnummer" type="number" class="form-control" placeholder="" value="">
			<input name="Beschreibung" type="text" class="form-control" placeholder="Suchen">
			<input type="hidden" name="Intern" type="text" class="form-control" placeholder="" value="">
			<input type="hidden" name="Bestand" type="number" class="form-control" placeholder="" value="">
			<input type="hidden" name="Lagerort" type="text" class="form-control" placeholder="" value="">
			<input type="hidden" name="neuerBestand" type="text" class="form-control" placeholder="" value="">
			<input type="hidden" name="artikel" type="text" class="form-control" placeholder="" value="">
			<input type="hidden" name="add" type="text" class="form-control" placeholder="" value="">
						
        </div>

      <button type="submit" class="btn btn-default">Los</button>

      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li><a href="#">Abmelden</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menü <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Aktion</a></li>
            <li><a href="#">Andere Aktion</a></li>
            <li><a href="#">Irgendwas anderes</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#" id="darkButton">Darkmode</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<script src="assets/jquery-1.11.3-jquery.min.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/darkmode.js"></script>