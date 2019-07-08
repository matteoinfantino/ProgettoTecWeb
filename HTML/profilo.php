<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<?php
require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="profilo";

if ((!isset($_SESSION["email"]))||($_SESSION["email"]=="admin@admin.it")){
	header("Location: pagina_errore_accesso.php");
	exit();
}

if ($dbOpen){
    $listaUtente=$connection->getUtente($_SESSION['email']);
    $listaCorsi=$connection->getCorsi(0,$connection->numCorsi());
    $listaPrenotazioni=$connection->getPrenotazioni($_SESSION['email']);
	}
else {
		$_SESSION["error"] = "Connessione non stabilita correttamente";
	}

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
    <p id="menuNoScript"><span xml:lang="en">Javascript</span> Disabilitato: Il <a href="#NoJS">men&ugrave;</a> &egrave; visualizzabile in fondo alla pagina</p>
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
			<p>Ti trovi in: Profilo</p>
		</div>

<?php
  if(!empty($listaUtente)){
    foreach ($listaUtente as $utente){
      if(isset($_SESSION['email'])){
        $nome = $utente['nome'];
        $cognome = $utente['cognome'];
        $citta = $utente['citta'];
        $indirizzo = $utente['indirizzo'];
        $nascita = $utente['nascita'];
        $email = $utente['email'];
      }
    }
  }

 ?>

  <div id="divGenerico">
		<h1 class="center">Informazioni Utente</h1>
    <ul class="anagrafica">
      <li><span>Nome:</span> <?php echo $nome;?></li>
      <li><span>Cognome:</span> <?php echo $cognome;?></li>
      <li><span>Citt&agrave;</span>: <?php echo $citta;?></li>
    </ul>
    <ul class="anagrafica">
      <li><span>Indirizzo:</span> <?php echo $indirizzo;?></li>
      <li><span>Data di Nascita:</span> <?php echo date("d/m/Y", strtotime($nascita));?></li>
      <li><span>Indirizzo</span> <span xml:lang="en">email</span>: <?php echo $email;?></li>
		</ul>
  </div>

  <form onsubmit="return checkInsPrenotazioni()" action="../PHP/post_utente.php" method="post" id="login-register-form" enctype="multipart/form-data">
    <fieldset>
      <legend>Prenota una lezione gratuita</legend>
      <ul>
      <li>
        <label for="corso">Seleziona il corso</label>
        <select id="corso" name="corso">
          <?php
            foreach ($listaCorsi as $corsi) {
              echo '<option value="'.$corsi['Titolo'].'">'.$corsi['Titolo'].'</option>';                    }
          ?>
        </select>
      </li>
      <li>
        <label for="data">Data (dd/mm/YYYY): </label>
        <input id="data" name="data" type="text" />
        <?php $errorData=""; if(isset($_SESSION['error']['dataErr'])) { $errorData = $_SESSION['error']['dataErr']; unset($_SESSION['error']['dataErr']); } ?>
      </li>
      <li>
        <label for="ora">Ora (HH:mm):</label>
        <input id="ora" name="ora" type="text" />
        <?php $errorOra=""; if(isset($_SESSION['error']['oraErr'])) { $errorOra = $_SESSION['error']['oraErr']; unset($_SESSION['error']['oraErr']); } ?>
        <?php echo '<span class="error">'.$errorData.$errorOra.'</span>'?>
      </li>
      <li id="buttons-login">
        <input id="utenteButt" class="button" value="Prenota" name="prenota" type="submit" />
        <?php if(isset($_SESSION['error']['emailErr'])){ echo '<span class="error">'.$_SESSION["error"]["emailErr"].'</span>'; unset($_SESSION['error']['emailErr']); }?>
      </li>
    </ul>
    </fieldset>
  </form>

  <div class="center">
    <?php
      if(!empty($listaPrenotazioni)){
        echo '<h1>La tua prenotazione gratuita</h1>';
        foreach ($listaPrenotazioni as $prenotazioni) {
          echo '<p><span class="pren">Nome Corso: </span>'.$prenotazioni['corso'].'</p>';
          echo '<p><span class="pren">Data Corso: </span>'.date("d/m/Y", strtotime($prenotazioni['data'])).'</p>';
          echo '<p><span class="pren">Ora Corso: </span>'.$prenotazioni['ora'].'</p>';
        }
        echo '<form action="../PHP/remove_prenotazione.php" method="post">
              <fieldset id="hideFieldset">
                <input class="button" value ="Elimina Prenotazione" type="submit"/>
              </fieldset>
              </form>';
      }
      else echo '<h1>Devi ancora effettuare la tua prenotazione</h1>';
    ?>
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
        <li><a href="index.php" xml:lang="en">Home</a></li>
  	    <li><a href="corsi.php">Corsi</a></li>
        <li><a href="abbonamenti.php">Abbonamenti</a></li>
  			<li><a href="news.php">News</a></li>
  	    <li><a href="galleria.php">Galleria</a></li>
  	    <li><a href="staff.php" xml:lang="en">Staff</a></li>
  	    <li><a href="contatti.php">Contatti</a></li>
        <li>Profilo</li>
        <li><a href="../PHP/logout.php" xml:lang="en">Logout</a></li>
  	  </ul>
  </noscript>

<?php $connection->closeConnection();?>
</body>
</html>
