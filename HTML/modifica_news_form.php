<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

$_SESSION ['paginaCorr']="";

if ((!isset($_SESSION["email"]))||($_SESSION["email"]!="admin@admin.it")){
	header("Location: pagina_errore_accesso.php");
	exit();
}

require_once __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "connection.php";
use DB\DBConnection;

$connection = new DBConnection();
$dbOpen=$connection->openConnection();

if ($dbOpen){
  $news = $connection->getNewsId($_GET['modifica']);
  $id=$news['Id'];
  $titolo=$news['Titolo'];
  $immagine=$news['Immagine'];
  $testo=$news['Descrizione'];
  $alt=$news['Alt'];
}
else {
		echo "Connessione non stabilita correttamente";     //if (dbOpen)
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
			<p>Ti trovi in: Pannello di amministrazione >> <span xml:lang="en">Form</span> modifica <span xml:lang="en">news</span></p>
		</div>

   <form onclick="return checkInsNews()" action="../PHP/post_modifica_news.php?id=<?php $id ?>" id="login-register-form" enctype="multipart/form-data">
      <fieldset>
       <legend>Modifica la <span xml:lang="en">News</span></legend>
       <ul>
          <li>
           <label for="titolo">Titolo</label>
           <input id="titolo" name="titolo" type="text" <?php echo "value=\"$titolo\"";?>/>
            <?php if(isset($_SESSION['error']['titoloErr'])) { echo '<span class="error">'. $_SESSION['error']['titoloErr'] .'</span>'; unset($_SESSION['error']['titoloErr']); } else {echo "";} ?>
          </li>
          <li>
           <label for="testo">Inserisci l'alt della immagine</label>
           <input id="alt" name="alt" type="text" <?php echo "value=\"$alt\"";?> />
            <?php if(isset($_SESSION['error']['altErr'])) { echo '<span class="error">'. $_SESSION['error']['altErr'] .'</span>'; unset($_SESSION['error']['altErr']); } else {echo "";} ?>
          </li>
          <li>
           <label for="testo">Inserisci la notizia</label>
           <textarea name="testo" id="testo" cols="1" rows="30"><?php echo $testo;?></textarea>
            <?php if(isset($_SESSION['error']['testoErr'])) { echo '<span class="error">'. $_SESSION['error']['testoErr'] .'</span>'; unset($_SESSION['error']['testoErr']); } else {echo "";} ?>
          </li>
       </ul>
     </fieldset>
         <li id="buttons-login">
            <?php echo '<input type="hidden" value="'.$news['Id'].'" name="update" />' ?>
           <input value="Modifica" class="button" id="modifica" name="modifica" type="submit"/>
           <input value="Cancella" class="button" id="delete-login-button" type="reset" />
         </li>
       </ul>
     </fieldset>
   </form>
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
      <?php include __DIR__ . DIRECTORY_SEPARATOR . "../PHP" . DIRECTORY_SEPARATOR . "userbar_mobile.php";?>
 	  </ul>
 </noscript>

<?php $connection->closeConnection();?>
</body>
</html>
