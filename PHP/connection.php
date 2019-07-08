<?php
namespace DB;
class DBConnection
{
  const host = 'localhost';
  const user = 'root';
  const pwd = 'root';
  const db = 'tecweb';

  public $conn;

  public function openConnection()  {
    $this->conn = mysqli_connect(static::host, static::user, static::pwd, static::db);
    if (!$this->conn) {
      return false;
    }
    return true;
  }

  public function getUser($email,$psw){
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '" AND password="'. $psw .'"';
    $queryResult = mysqli_query($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function getUser2($email){
    $querySelect= 'SELECT mail FROM utenti WHERE mail= "' . $email . '"';
    $queryResult = mysqli_query($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return false;
    else {
      return true;
    }
  }

  public function getNewsId($id){
    $querySelect= 'SELECT * FROM  news WHERE id="'.$id.'" ';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayNews=array(
          'Immagine'=>$row['immagine'],
          'Id'=>$row['id'],
          'Titolo'=>$row['titolo'],
          'Descrizione'=>$row['testo'],
          'Data'=>$row['data'],
          'Alt'=>$row['alt']
        );
      }
      return $arrayNews;
    }
  }

  public function numCorsi(){
    $querySelect= "SELECT * FROM  corsi";
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    return mysqli_num_rows($queryResult);
  }

  public function getCorsi($this_page_first_result,$results_per_page){
    $querySelect= 'SELECT * FROM  corsi LIMIT ' . $this_page_first_result . ',' .  $results_per_page .'';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayCorso=array(
          'Id'=>$row['corsi_id'],
          'Titolo'=>$row['titolo'],
          'Descrizione'=>$row['descrizione'],
          'Alt'=>$row['alt'],
          'Immagine'=>$row['immagine']
        );
        array_push($result,$arrayCorso);
      }
      return $result;
    }
  }

  public function getCorso($id){
    $querySelect= 'SELECT * FROM  corsi WHERE corsi_id="'.$id.'" ';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayCorso=array(
          'Id'=>$row['corsi_id'],
          'Titolo'=>$row['titolo'],
          'Descrizione'=>$row['descrizione'],
          'DescrizioneL'=>$row['descrizione_long'],
          'Alt'=>$row['alt'],
          'Giorno' => $row['giorno'],
          'Ora' => $row['ora'],
          'Immagine'=>$row['immagine']
        );
      }
      return $arrayCorso;
    }
  }

  public function insertUser($nome,$cognome,$citta,$indirizzo,$nascita,$emailR,$passwordR){
    $nome = mysqli_real_escape_string($this->conn, $nome);
    $cognome = mysqli_real_escape_string($this->conn, $cognome);
    $citta = mysqli_real_escape_string($this->conn, $citta);
    $indirizzo = mysqli_real_escape_string($this->conn, $indirizzo);
    $emailR = mysqli_real_escape_string($this->conn, $emailR);
    $passwordR = mysqli_real_escape_string($this->conn, $passwordR);
    $query1 = "INSERT INTO anagrafica (nome, cognome, citta, indirizzo, nascita, mail) VALUES ('$nome','$cognome','$citta','$indirizzo','$nascita','$emailR')";
    $query2 = "INSERT INTO utenti (mail,password) VALUES ('$emailR','$passwordR')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    $queryResult2 = mysqli_query($this->conn, $query2);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function numImg(){
    $querySelect= "SELECT * FROM  galleria";
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    return mysqli_num_rows($queryResult);
  }

  public function getImg($this_page_first_result,$results_per_page){
    $querySelect= 'SELECT * FROM  galleria LIMIT ' . $this_page_first_result . ',' .  $results_per_page .'';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayGalleria=array(
          'Id'=>$row['id'],
          'Immagine'=>$row['immagine'],
          'Alt'=>$row['alt'],
          'Didascalia'=>$row['didascalia']
        );
        array_push($result,$arrayGalleria);
      }
      return $result;
    }
  }

  public function getNews(){
    $querySelect= 'SELECT * FROM  news';
    $queryResult= mysqli_query ($this->conn,$querySelect) or die (mysqli_error($this->conn));
    if (mysqli_num_rows($queryResult)==0)
      return null;
    else{
      $result=array();
      while ($row=mysqli_fetch_assoc($queryResult)){
        $arrayNews=array(
          'Immagine'=>$row['immagine'],
          'Id'=>$row['id'],
          'Titolo'=>$row['titolo'],
          'Testo'=>$row['testo'],
          'Alt'=>$row['alt'],
          'Data'=>$row['data']
        );
        array_push($result,$arrayNews);
      }
      return $result;
    }
  }



  public function insertCorsi($titolo,$testo,$fileToUpload,$testoLong,$alt,$ora,$giorno){
    $fileToUpload = mysqli_real_escape_string($this->conn, $fileToUpload);
    $titolo = mysqli_real_escape_string($this->conn, $titolo);
    $testo = mysqli_real_escape_string($this->conn, $testo);
    $testoLong = mysqli_real_escape_string($this->conn, $testoLong);
    $alt = mysqli_real_escape_string($this->conn, $alt);
    $query1 = "INSERT INTO corsi(titolo,descrizione,immagine,descrizione_long,alt,ora,giorno) VALUES ('$titolo','$testo','$fileToUpload','$testoLong','$alt','$ora','$giorno')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function insertNews($titolo,$testo,$fileToUpload,$alt){
    $fileToUpload = mysqli_real_escape_string($this->conn, $fileToUpload);
    $titolo = mysqli_real_escape_string($this->conn, $titolo);
    $testo = mysqli_real_escape_string($this->conn, $testo);
    $alt = mysqli_real_escape_string($this->conn, $alt);
    $query1 = "INSERT INTO news(immagine,titolo,testo,alt) VALUES ('$fileToUpload','$titolo','$testo','$alt')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function insertGalleria($testo,$fileToUpload,$alt){
    $fileToUpload = mysqli_real_escape_string($this->conn, $fileToUpload);
    $testo = mysqli_real_escape_string($this->conn, $testo);
    $alt = mysqli_real_escape_string($this->conn, $alt);
    $query1 = "INSERT INTO galleria(immagine,alt,didascalia) VALUES ('$fileToUpload','$alt','$testo')";
    $queryResult1 = mysqli_query($this->conn, $query1);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function removePrenotazione($email){
    $query = 'DELETE FROM prenotazioni WHERE email="'.$email.'"';
    mysqli_query($this->conn,$query);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }
  public function removeCorsi($id){
    $query = 'DELETE FROM corsi WHERE corsi_id="'.$id.'"';
    mysqli_query($this->conn,$query);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }
  public function removeNews($id){
    $query = 'DELETE FROM news WHERE id="'.$id.'"';
    mysqli_query($this->conn,$query);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function removeGalleria($id){
    $query = 'DELETE FROM galleria WHERE id="'.$id.'"';
    mysqli_query($this->conn,$query);
    if (mysqli_affected_rows($this->conn)==0){
      return false;
    }
    else{
      return true;
    }
  }

  public function closeConnection()  {
    mysqli_close($this->conn);
  }

  public function getUtente($email){
      $query = 'SELECT * FROM anagrafica where mail = "'.$email.'"';
      $queryResult = mysqli_query ($this->conn,$query) or die (mysqli_error($this->conn));
      if (mysqli_num_rows($queryResult)==0)
        return null;
      else{
        $result = array();
        while ($row=mysqli_fetch_assoc($queryResult)){
          $arrayUtente=array(
            'nome'=>$row['nome'],
            'cognome'=>$row['cognome'],
            'citta'=>$row['citta'],
            'indirizzo'=>$row['indirizzo'],
            'nascita'=>$row['nascita'],
            'email'=>$row['mail']
          );
          array_push($result,$arrayUtente);
        }
        return $result;
      }
    }
  public function getPrenotazioni($email){
      $query = 'SELECT * FROM prenotazioni where email = "'.$email.'"';
      $queryResult = mysqli_query ($this->conn,$query) or die (mysqli_error($this->conn));
      if (mysqli_num_rows($queryResult)==0)
        return null;
      else{
        $result = array();
        while ($row=mysqli_fetch_assoc($queryResult)){
          $arrayPrenotazioni=array(
            'corso'=>$row['corso'],
            'data'=>$row['data'],
            'ora'=>$row['ora']
          );
          array_push($result,$arrayPrenotazioni);
        }
        return $result;
      }
    }

    public function getGalleria(){
      $query = 'SELECT * FROM galleria';
      $queryResult = mysqli_query ($this->conn,$query) or die (mysqli_error($this->conn));
      if (mysqli_num_rows($queryResult)==0)
        return null;
      else{
        $result = array();
        while ($row=mysqli_fetch_assoc($queryResult)){
          $arrayGalleria=array(
            'Id'=>$row['id'],
            'Immagine'=>$row['immagine'],
            'Alt'=>$row['alt'],
            'Didascalia'=>$row['didascalia']
          );
          array_push($result,$arrayGalleria);
        }
        return $result;
      }
    }

    public function updateCorsi($id,$titolo,$testo,$testoLong,$alt,$giorno,$ora){
      $titolo = mysqli_real_escape_string($this->conn, $titolo);
      $testo = mysqli_real_escape_string($this->conn, $testo);
      $testoLong = mysqli_real_escape_string($this->conn, $testoLong);
      $alt = mysqli_real_escape_string($this->conn, $alt);
      $query = 'UPDATE corsi SET titolo="'.$titolo.'", descrizione="'.$testo.'", descrizione_long="'.$testoLong.'", alt="'.$alt.'", ora="'.$ora.'", giorno="'.$giorno.'" WHERE corsi_id="'.$id.'"';
      mysqli_query($this->conn,$query);
      if (mysqli_affected_rows($this->conn)==0){
        return false;
      }
      else{
        return true;
      }
    }

    public function updateNews($id,$titolo,$testo,$alt){
      $titolo = mysqli_real_escape_string($this->conn, $titolo);
      $testo = mysqli_real_escape_string($this->conn, $testo);
      $alt = mysqli_real_escape_string($this->conn, $alt);
      $query = 'UPDATE news SET titolo="'.$titolo.'", testo="'.$testo.'", alt="'.$alt.'" WHERE id="'.$id.'"';
      mysqli_query($this->conn,$query);
      if (mysqli_affected_rows($this->conn)==0){
        return false;
      }
      else{
        return true;
      }
    }

    public function insertPrenotazione($email,$corso,$data,$ora){
      $query1 = "INSERT INTO prenotazioni(corso,data,ora,email) VALUES ('$corso','$data','$ora','$email')";
      $queryResult1 = mysqli_query($this->conn, $query1);
      if (mysqli_affected_rows($this->conn)==0){
        return false;
      }
      else{
        return true;
      }
    }



};
?>
