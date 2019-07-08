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
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_768px.css" media="handheld, screen and (max-width:768px),only screen and (max-device-width:768px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/css_index_small_480px.css" media="handheld, screen and (max-width:480px),only screen and (max-device-width:480px)"/>
<link rel="stylesheet" type="text/css" href="../CSS/print.css" media="print"/>

<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet"/>
<script type="text/javascript" src="../JS/script.js"> </script>

</head>
<body>
	<div id="nav">
    <a href="#content" id="hideLink" xml:lang="en">Skip to content</a>
	  <div id="logo"><img src="../IMG/logo1.png" alt="Logo Energya"/></div>
    <button id="menuIcon" title="menuIcon" onclick="menuHamburger()"><img src="../IMG/hamburger_icon.png" alt="icona menu"/></button>
	  <ul class="menuItems" id="menuu" >
	    <li id="currentLink" xml:lang="en">Home</li>
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

<noscript>
  <p id="menuNoScript"><span xml:lang="en">Javascript</span> Disabilitato: Il <a href="#NoJS">men&ugrave;</a> &egrave; visualizzabile in fondo alla pagina</p>
</noscript>

	<div id="content">
		<div id="breadcrumb">
			<p>Ti trovi in: <span xml:lang="en">Home</span></p>
		</div>

		<div class="divSx">
			<h1>Chi siamo</h1>
			<img src="../IMG/foto1.jpg" alt="Sollevamento pesi"/>
			<p>La palestra <span xml:lang="en">"Energya Fitness Club"</span> offre numerose opportunit&agrave; per sfruttare i benefici garantiti dall'allenamento fisico, in un ambiente accogliente e confortevole, sotto la guida di uno staff di istruttori preparati e disponibili.</p>
			<p>Le nostre attivit&agrave; sono composte non solo da sala pesi e corpo libero, due fattori importantissimi per il <span xml:lang="en">"wellness"</span>, ma anche da diversi corsi divertenti e coinvolgenti.</p>
			<p>I nostri soci possono quindi disporre di varie alternative per soddisfare le proprie preferenze, oltre a sentirsi sempre in famiglia.</p>
		</div>

		<div class="divDx">
			<h1>La nostra storia</h1>
			<img src="../IMG/foto2.jpg" alt="Interno della palestra"/>
			<p>La struttura, nata nel 1990, si erige a Coste di Maser ed &egrave; diventata ormai un punto fisso del territorio.</p>
			<p>Nel 1999 l'impianto aderisce ufficialmente alle norme della <abbr title="Associazione Italiana Cultura e Sport">AICS</abbr>, avendo l'obbligo di formare i propri istruttori e collaboratori con relativi corsi indetti dalla federazione. </p>
			<p>Nel 2016 viene premiata dalla sezione del Veneto della federazione stessa per la longevit&agrave; e la professionalit&agrave; dimostrata negli anni.</p>
		</div>

		<div id="Banner">
			<div>
				<h1>Iscriviti al nostro sito</h1>
				<p>Ricevi subito l'opportunit&agrave; di partecipare a uno dei nostri corsi o delle nostre attivit&agrave; gratuitamente!</p>
				<a href="registrazione.php" id="linkSfondoScuro">Iscriviti</a>
			</div>
		</div>

		<div class="divGenerico">
			<h1> I nostri punti di forza </h1>
			<div class="Card Sx">
				<img src="../IMG/woman.png" alt="Icona persona con manubri"/>
				<h2>Professionalit&agrave;</h2>
				<p>I nostri istruttori vantano lauree in scienze motorie e seguono costantemente corsi di aggiornamento per tenersi al passo con le novit&agrave;.</p>
			</div>
			<div class="Card Dx">
				<img src="../IMG/gym.png" alt="Icona manubrio"/>
				<h2>Benessere</h2>
				<p>Nella nostra struttura viene particolarmente curata la salute della persona con allenamenti adeguati e personalizzati, specificatamente costruiti per risolvere problematiche fisiche.</p>
			</div>
		</div>
	</div>


  <div id="footer">
    <p>Sito <abbr xml:lang="en" title="World Wide Web">Web</abbr> realizzato da: </p>
    <p>Matteo Infantino</p>
    <p>Simone Franconetti</p>
    <p>Luca Marcon</p>
    <img src="http://www.w3.org/Icons/valid-xhtml10"  alt="Valid XHTML 1.0 Strict" class="inline"/>
    <img src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valido!" class="inline"/>
  </div>

<noscript>
	  <ul id="NoJS">
	    <li xml:lang="en">Home</li>
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
