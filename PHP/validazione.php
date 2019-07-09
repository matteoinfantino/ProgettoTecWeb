<?php

function valNome($nome){
  $nomeErr="";
  if (empty($nome)){
    $nomeErr="Nome non inserito";
  }
  else if (!preg_match("/^[a-zA-Z -]{3,}$/",$nome)) {
    $nomeErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $nomeErr;
}

function valCognome($cognome){
  $cognomeErr="";
  if (empty($cognome)){
    $cognomeErr="Cognome non inserito";
  }
  else if (!preg_match("/^[a-zA-Z '-]{3,}$/",$cognome)) {
      $cognomeErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $cognomeErr;
}

function valCitta($citta){
  $cittaErr="";
  if (empty($citta)){
    $cittaErr="Cittá non inserita";
  }
  else if (!preg_match("/^[a-zA-Z ]{2,}$/",$citta)) {
      $cittaErr = "Sono consentite solo lettere e spazi bianchi";
  }
  return $cittaErr;
}

function valIndirizzo($indirizzo){
  $indirizzoErr="";
  if (empty($indirizzo)){
    $indirizzoErr="Indirizzo non inserito";
  }
  else if (!preg_match("/^[A-Za-z0-9\-\/ ,.]+$/",$indirizzo)) {
      $indirizzoErr = "Sono consentite solo lettere, spazi bianchi e alcuni simboli ('-', '/', ',') ";
  }
  return $indirizzoErr;
}

function valEmail($emailR){
  $emailErr="";
  if (empty($emailR)){
    $emailErr="Indirizzo mail non inserito";
  }
  else if (!filter_var($emailR, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Formato della mail non valido";
  }
  return $emailErr;
}

function valPassword($passwordR){
  $passwordErr="";
  if (empty($passwordR)){
    $passwordErr="password non inserita";
  }
  if (!preg_match("/^.{8,}$/",$passwordR)) {
    $passwordErr = "La password non ha almeno 8 caratteri";
  }
  return $passwordErr;
}

function valPassword1($passwordR,$passwordR1){
  $passwordErr1="";
  if ($passwordR!=$passwordR1) {
    $passwordErr1 = "Le password non corrispondono";
  }
  return $passwordErr1;
}

function valReg($nomeErr,$cognomeErr,$cittaErr,$nascitaErr,$indirizzoErr,$emailErr,$passwordErr,$passwordErr1){
  if (empty($nomeErr) && empty($cognomeErr) && empty($cittaErr) && empty($nascitaErr) && empty($indirizzoErr) && empty($emailErr) && empty($passwordErr) && empty($passwordErr1)  )
    {
      return true;
    }
    else {
      return false;
    }
}

function valTitolo($titolo){
  $titoloErr="";
  if (!preg_match("/^.{5,30}$/",$titolo)) {
    $titoloErr = "Il titolo deve essere di minimo 5 e massimo 30 caratteri";
  }
  return $titoloErr;
}

function valTesto($testo){
  $testoErr="";
  $testo1 = trim(preg_replace('/\s\s+/', ' ', $testo)); //nel caso di "a capo", vengono sostituiti con degli spazi
  if (!preg_match("/^.{40,300}$/",$testo1)) {
    $testoErr = "La descrizione corta deve essere di minimo 40 e massimo 300 caratteri";
  }
  return $testoErr;
}

function valDidascalia($testo){
  $testoErr="";
  if (!preg_match("/^.{0,30}$/",$testo)) {
    $testoErr = "La didascalia dell'immagine deve essere di massimo 30 caratteri";
  }
  return $testoErr;
}

function valTestoLong($testoLong){
  $testoLongErr="";
  $testoLong1 = trim(preg_replace('/\s\s+/', ' ', $testoLong));
  if (!preg_match("/^.{40,900}$/",$testoLong1)) {
    $testoLongErr = "La descrizione corta di minimo 40 e massimo 900 caratteri";
  }
  return $testoLongErr;
}

function valAlt($alt){
  $altErr="";
  if (!preg_match("/^.{0,20}$/",$alt)) {
    $altErr = "L'alt dell'immagine deve essere di massimo 20 caratteri";
  }
  return $altErr;
}

function valCorsi($titoloErr,$testoErr,$altErr,$testoLongErr,$oraErr){
  if(empty($titoloErr) && empty($testoErr) && empty($altErr) && empty($testoLongErr) && empty($oraErr))
    return true;
  else
    return false;
}

function valNews($titoloErr,$testoErr,$altErr){
  if(empty($titoloErr) && empty($testoErr) && empty($altErr))
    return true;
  else
    return false;
}

function valGalleria($testoErr,$altErr){
  if(empty($testoErr) && empty($altErr))
    return true;
  else
    return false;
}

function valNascita($nascita){
  $nascitaErr="";
  $text = explode('-',$nascita);
  if(count($text)==3)
    if(checkdate($text[1],$text[0],$text[2])){
      $nascitaErr="";
    }
    else
      $nascitaErr="Data non corretta (dd/mm/YYYY).";
  else
    $nascitaErr="Formato non valido (dd/mm/YYYY).";

return $nascitaErr;
}

function valOra($ora){
  $oraErr="";
  if (empty($ora)){
    $oraErr=" Ora non inserita.";
  }
  else if(!preg_match("/^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]$/",$ora))
    $oraErr=" Ora non corretta (hh:mm:ss).";
  return $oraErr;
}
function valPrenotazioni($data,$ora){
  if(empty($data) && empty($ora))
    return true;
  else
    return false;
}

 ?>
