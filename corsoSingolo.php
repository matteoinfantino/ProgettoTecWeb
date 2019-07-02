<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

require_once __DIR__ . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

$_SESSION["error"] = "";

if ($dbOpen){
    $corso=$connection->getCorso($_GET['id']);
	}
else {
		$_SESSION["error"] = "Connessione non stabilita correttamente";
	}

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

<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="CSS/print.css" media="print"/>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>

</head>
<body>

	<div id="nav">
		<div id="logo"><img src="IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
      <li><a href="index.php" xml:lang="en">Home</a></li>
			<li><a href="corsi.php">Corsi</a></li>
      <li><a href="abbonamenti.php">Abbonamenti</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="galleria.php">Galleria</a></li>
			<li><a href="staff.php" xml:lang="en">Staff</a></li>
			<li><a href="contatti.php">Contatti</a></li>
      <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
		</ul>
	</div>

	<div id="header">
		<img src="IMG/logo1.png" alt="Logo Energya"/>
	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>

	<div id="content">

		<div id="breadcrumb">
			<p>Ti trovi in: Corsi > <?php echo $corso['Titolo']; ?> </p>
		</div>

  	<h1 class="center"><?php echo $corso['Titolo']; ?></h1>

  	<?php
      echo '<div class="divGenerico center">';
      echo '<img src="'.$corso['Immagine'].'" alt="'.$corso['Alt'].'"/>';
      echo '<p class="time">'.$corso['Giorno'].' alle ore '.$corso['Ora'].'</p>';
      echo '<p>'.$corso['DescrizioneL'].'</p>';
      echo '</div>';
    ?>

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
      <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
      <?php include __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";?>
	  </ul>
</noscript>

<?php $connection->closeConnection();?>

</body>
</html>
