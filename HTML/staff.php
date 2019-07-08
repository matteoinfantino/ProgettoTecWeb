<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

?>

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
    <p id="menuNoScript"><span xml:lang="en">Javascript</span> Disabilitato: Il <a href="#NoJS">menu</a> &egrave; visualizzabile in fondo alla pagina</p>
  </noscript>
	<div id="nav">
    <a href="#content" id="hideLink">Vai al contenuto</a>
	  <div id="logo"><img src="../IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()" ><img src="../IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
	    <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
			<li><a href="abbonamenti.php">Abbonamenti</a></li>
			<li><a href="news.php">News</a></li>
			<li><a href="galleria.php">Galleria</a></li>
	    <li id="currentLink" xml:lang="en">Staff</li>
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
			<p>Ti trovi in: <span xml:lang="en">Staff</span></p>
		</div>

    <div id="staff">
      <div class="fila">
        <img src="../IMG/p1.png" alt="personal trainer" />
        <p class="bold">Anna Zanon</p>
        <p class="under" xml:lang="en">Step &amp; total body</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p2.png" alt="personal trainer" />
        <p class="bold">Valerio Rossi</p>
        <p class="under" xml:lang="en">Funktional</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p3.png" alt="personal trainer" />
        <p class="bold">Giorgio Bassini</p>
        <p class="under" xml:lang="en">Personal Trainer</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p4.png" alt="personal trainer" />
        <p class="bold">Elena Ferrari</p>
        <p class="under" >Ginnastica dolce</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p5.png" alt="personal trainer" />
        <p class="bold">Sofia Verdi</p>
        <p class="under" xml:lang="en">Pound</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p6.png" alt="personal trainer" />
        <p class="bold">Riccardo Moro</p>
        <p class="under" xml:lang="en">Personal Trainer</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p7.png" alt="personal trainer" />
        <p class="bold">Beatrice Lana</p>
        <p class="under"><abbr title="Glutei, addominali, glutei">G.A.G</abbr></p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div class="fila">
        <img src="../IMG/p8.png" alt="personal trainer" />
        <p class="bold">Simone Peruzzo</p>
        <p class="under" xml:lang="en">Fitboxe</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
    </div>

	</div>

  <?php require_once __DIR__ . DIRECTORY_SEPARATOR . "footer.html"; ?>

  <noscript>
  	  <ul id="NoJS">
        <li><a href="index.php" xml:lang="en">Home</a></li>
  	    <li><a href="corsi.php">Corsi</a></li>
  			<li><a href="abbonamenti.php">Abbonamenti</a></li>
  			<li><a href="news.php">News</a></li>
  			<li><a href="galleria.php">Galleria</a></li>
  	    <li.png xml:lang="en">Staff</li>
  	    <li><a href="contatti.php">Contatti</a></li>
        <?php include __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
  	  </ul>
  </noscript>

</body>
</html>
