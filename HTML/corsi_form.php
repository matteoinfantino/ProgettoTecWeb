<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

if ((!isset($_SESSION["email"]))||($_SESSION["email"]!="admin@admin.it")){
	header("Location: pagina_errore_accesso.php");
	exit();
}
if (!isset($_SESSION["successo"]))
  $_SESSION["successo"]=0;

$_SESSION ['paginaCorr']="";

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Script-Type" content="text/javascript"/>
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content="Energya - un luogo per tutti quelli che amano la palestra e vogliono sentirsi come in famiglia!"/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone, Infantino Matteo, Marcon Luca"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<link rel="stylesheet" type="text/css" href="../CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:720px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/print.css" media="print"/>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="../JS/script.js"> </script>

</head>
<body>
  <noscript>
    <span id="menuNoScript"><span xml:lang="en">Javascript</span> Disabilitato: Il <a href="#NoJS">menu</a> &egrave; visualizzabile in fondo alla pagina</span>
  </noscript>
	<div id="nav">
	  <div id="logo"><img src="../IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="../IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
      <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
      <li><a href="abbonamenti.php">Abbonamenti</a></li>
      <li><a href="news.php">News</a></li>
	    <li><a href="galleria.php">Galleria</a></li>
      <li><a href="staff.php" xml:lang="en">Staff</a></li>
	    <li><a href="contatti.php">Contatti</a></li>
      <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
	  </ul>
	</div>
	<div id="header">
		<img src="../IMG/logo1.png" alt="Logo Energya"/>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar.php";?>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: Pannello di amministrazione >> Inserimento corsi</p>
		</div>

		<form onsubmit="return checkInsCorsi()" action="../PHP/post_corsi.php" method="post" id="login-register-form" enctype="multipart/form-data">
			<fieldset>
				<legend>Inserisci un nuovo corso</legend>
				<ul>
          <li>
						<label for="titolo">Titolo</label>
						<input id="titolo" name="titolo" type="text" <?php if(isset($_SESSION['error']['titoloErr'])) if(isset ($_SESSION['var']['titolo'])) {$titolo = $_SESSION['var']['titolo']; echo "value=\"$titolo\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['titoloErr'])) { echo '<span class="error">'. $_SESSION['error']['titoloErr'] .'</span>'; unset($_SESSION['error']['titoloErr']); } else {echo "";} ?>
          </li>
          <li>
            <label for="fileToUpload">Inserisci Immagine</label>
            <input id="fileToUpload" name="fileToUpload" type="file" />
            <?php if(isset($_SESSION['error']['err'])) { echo '<span class="error">'. $_SESSION['error']['err'] .'</span>'; unset($_SESSION['error']['err']); } else {echo "";} ?>
          </li>
          <li>
						<label for="titolo">Alt immagine (facoltativo)</label>
						<input id="alt" name="alt" type="text" <?php if(isset($_SESSION['error']['altErr']))if(isset ($_SESSION['var']['alt'])) {$alt = $_SESSION['var']['alt']; echo "value=\"$alt\"";} else echo "value=\"\"";?>/>
            <?php if(isset($_SESSION['error']['altErr'])) { echo '<span class="error">'. $_SESSION['error']['altErr'] .'</span>'; unset($_SESSION['error']['altErr']); } else {echo "";} ?>
          </li>
          <li>
						<label for="testo">Descrizione corta</label>
						<textarea name="testo" id="testo" cols="1" rows="10"><?php if(isset($_SESSION['error']['testoErr'])) if(isset ($_SESSION['var']['testo'])) {$testo = $_SESSION['var']['testo']; echo $testo;} ?></textarea>
            <?php if(isset($_SESSION['error']['testoErr'])) { echo '<span class="error">'. $_SESSION['error']['testoErr'] .'</span>'; unset($_SESSION['error']['testoErr']); } else {echo "";} ?>
          </li>
          <li>
						<label for="testo">Descrizione lunga</label>
						<textarea name="testoLong" id="testoLong"  cols="1" rows="25"><?php if(isset($_SESSION['error']['testoLongErr'])) if(isset ($_SESSION['var']['testoLong'])) {$testo = $_SESSION['var']['testoLong']; echo $testo;} ?></textarea>
            <?php if(isset($_SESSION['error']['testoLongErr'])) { echo '<span class="error">'. $_SESSION['error']['testoLongErr'] .'</span>'; unset($_SESSION['error']['testoLongErr']); } else {echo "";} ?>
          </li>
          <li>
            <label for="giorno">Giorno</label>
            <select id="giorno" name="giorno">
              <option value="lunedi">Luned&iacute;</option>
              <option value="martedi">Marted&iacute;</option>
              <option value="mercoledi">Mercoled&iacute;</option>
              <option value="giovedi">Gioved&iacute;</option>
              <option value="venerdi">Venerd&iacute;</option>
              <option value="sabato">Sabato</option>
              <option value="domenica">Domenica</option>
            </select>
          </li>
          <li>
            <label for="ora">Orario (HH:mm)</label>
            <input id="ora" name="ora" type="text" <?php if(isset($_SESSION['error']['oraErr'])) if(isset ($_SESSION['var']['ora'])) {$testo = $_SESSION['var']['ora']; echo $testo;} ?> />
            <?php if(isset($_SESSION['error']['oraErr'])) { echo '<span class="error">'. $_SESSION['error']['oraErr'] .'</span>'; unset($_SESSION['error']['oraErr']); } else {echo "";} ?>
          </li>
					<li id="buttons-login">
						<input value="Inserisci" class="button" id="inserisci" name="inserisci" type="submit" />
						<input value="Cancella" class="button" id="delete-login-button" type="reset" />
					</li>
				</ul>
			</fieldset>
		</form>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

  <noscript>
  	  <ul id="NoJS">
        <li><a href="index.php" xml:lang="en">Home</a></li>
  	    <li><a href="corsi.php">Corsi</a></li>
        <li><a href="abbonamenti.php">Abbonamenti</a></li>
        <li><a href="news.php">News</a></li>
  	    <li><a href="galleria.php">Galleria</a></li>
        <li><a href="staff.php" xml:lang="en">Staff</a></li>
  	    <li><a href="contatti.php">Contatti</a></li>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
  	  </ul>
  </noscript>

</body>
</html>