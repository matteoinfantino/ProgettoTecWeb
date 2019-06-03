<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it"><!-- il comando html permette di importare un namespace, contenente tutto l'insieme dei tag utilizzabili -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!--metatag che permette di dire che cosa ci sara' all'interno della pagina. Consiglio e' sempre quello di utilizzare la codifica utf-8 perche' e' univoco per la codifica degli accenti-->
<title>Energya Fitness Club</title>
<meta name="title" content="Energya Fitness Club"/>
<meta name="description" content=""/>
<meta name="keywords" content="Energya, fitness, palestra, sport"/>
<meta name="language" content="italian it"/>
<meta name="author" content="Franconetti Simone"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="stylesheet" type="text/css" href="CSS/css_index.css" media="handheld, screen"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_1200px.css" media="handheld, screen and (max-width:1200px),only screen and (max-device-width:1200px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_720px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:720px)"/>
<link rel="stylesheet" type="text/css" href="CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'>


<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="JS/script.js"> </script>


</head>
<body>

	<div id="nav">
	  <div id="logo"><img src="IMG/logo2.png" alt="Logo Energya"/></div>
		<button id="menuIcon" onclick="menuHamburger()"><i class='fas fa-bars'></i></button>
	  <ul class="menuItems" id="menuu" >
	    <li><a href="index.php" xml:lang="en">Home</a></li>
	    <li><a href="corsi.php">Corsi</a></li>
			<li><a href="galleria.php">Galleria</a></li>
	    <li id="currentLink" xml:lang="en">Staff</li>
	    <li><a href="contatti.php">Contatti</a></li>
			<li><a href="registrazione.php">Registrazione</a></li>
			<li><a href="login.php">Accedi</a></li>
	  </ul>
	</div>
	<div id="header">
		<img src="IMG/logo1.png" alt=""/>
	</div>

	<?php require_once __DIR__ . DIRECTORY_SEPARATOR . "userbar.php";
	 ?>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Staff</span></p>
		</div>

    <div id="staff">
      <div id="fila">
        <img src="IMG/p1" alt="personal trainer" />
        <p>Anna Zanon</p>
        <p xml:lang="en">Step &amp; total body</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p2" alt="personal trainer" />
        <p>Valerio Rossi</p>
        <p xml:lang="en">Funktional</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p3" alt="personal trainer" />
        <p>Giorgio Bassini</p>
        <p xml:lang="en">Personal Trainer</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p4" alt="personal trainer" />
        <p>Elena Ferrari</p>
        <p>Ginnastica dolce</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p5" alt="personal trainer" />
        <p>Sofia Verdi</p>
        <p xml:lang="en">Pound</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p6" alt="personal trainer" />
        <p>Riccardo Moro</p>
        <p xml:lang="en">Personal Trainer</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p7" alt="personal trainer" />
        <p>Beatrice Lana</p>
        <p xml:abbr title="Glutei, addominali, glutei">G.A.G</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
      <div id="fila">
        <img src="IMG/p8" alt="personal trainer" />
        <p>Simone Peruzzo</p>
        <p xml:lang="en">Fitboxe</p>
        <p>
          Telefono: 3334455666
        </p>
      </div>
    </div>

	</div>

	<div id="footer">
		<p>Sito <span xml:lang="en" xml:abbr title="World Wide Web">Web</abbr>  realizzato da: </p>
		<p>Luca</p>
		<p>Matteo</p>
		<p>Franconetti Simone</p>
	</div>



</body>
</html>
