function menuHamburger() {
  var element = document.getElementById("menuu");
  if (element.className==="menuItems")
    element.className += " show";
  else
    element.className = "menuItems";
}

function mostraPassword() {
  var x = document.getElementById("password");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


//FUNZIONI PER "GALLERIA.PHP"


function show(img) {
  var div = document.getElementById("showImage");
  var imgExp=document.createElement("IMG");
  div.appendChild (imgExp);
  imgExp.src = img.src;
  document.getElementById('showImage').style.display = "block";
  imgExp.alt = img.alt;
}


function closeImage() {
  var div = document.getElementById("showImage");
  if (div.childElementCount>=2)
    div.removeChild(div.lastChild);
  document.getElementById('showImage').style.display = "none";
}


//VALIDAZIONE FORM



function checkNome(nomeInput){
  var pattern= /^[a-zA-Z '-]{3,}$/;
  var name = nomeInput.getAttribute("name");
  if (pattern.test(nomeInput.value)){
  togliErrore(nomeInput);
    return true;
  }
  else{
    if (nomeInput.value==""){
      if (name=="nome")
        mostraErrore(nomeInput, "Il campo \"nome\" non può essere vuoto");
      if (name=="cognome")
        mostraErrore(nomeInput, "Il campo \"cognome\" non può essere vuoto");
      if (name=="citta")
        mostraErrore(nomeInput, "Il campo \"città\" non può essere vuoto");
    }
    else
      mostraErrore(nomeInput, "Inserire almeno 3 lettere. I numeri e i caratteri speciali non sono consentiti.");
    return false;
  }
}

function checkIndirizzo(indirizzoInput){
  var pattern= /^[A-Za-z0-9\-\/ ,.]+$/;
  if (pattern.test(indirizzoInput.value)){
  togliErrore(indirizzoInput);
    return true;
  }
  else{
    if (indirizzoInput.value=="")
      mostraErrore(indirizzoInput, "Il campo indirizzo non può essere vuoto");
    else
      mostraErrore(indirizzoInput, "Inserire almeno 3 caratteri");
    return false;
  }
}


function checkNascita(nascitaInput) {
  var pattern= /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/;
  if (pattern.test(nascitaInput.value)){
  togliErrore(nascitaInput);
    return true;
  }
  else{
    if (nascitaInput.value=="")
      mostraErrore(nascitaInput, "Il campo nascita non può essere vuoto");
    else
    mostraErrore(nascitaInput, "Data inserita non valida. (dd/mm/yyyy) ");
    return false;
  }
}

function checkMail(mailInput) {
    var pattern= /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,5})+$/;
    if (pattern.test(mailInput.value)){
      togliErrore(mailInput);
      return true;
    }
    else{
      if (mailInput.value=="")
        mostraErrore(mailInput, "Il campo email non può essere vuoto");
      else
        mostraErrore(mailInput, "Indirizzo mail inserito non valido.  ");
      return false;
    }
    }

function checkPassword(passwordInput) {
    var pattern=/^.{8,}$/;
    if (pattern.test(passwordInput.value)){
      togliErrore(passwordInput);
      return true;
    }
    else{
      if (passwordInput.value=="")
        mostraErrore(passwordInput, "Il campo password non può essere vuoto");
      else
        mostraErrore(passwordInput, "Password inserita non valida. Inserire almeno 8 caratteri");
      return false;
    }
  }

function checkTitolo(titoloInput) {
    var pattern=/^.{5,30}$/;
    if (pattern.test(titoloInput.value)){
      togliErrore(titoloInput);
      return true;
    }
    else{
      if (titoloInput.value=="")
        mostraErrore(titoloInput, "Il campo titolo non può essere vuoto");
      else
        mostraErrore(titoloInput, "Il testo inserito deve avere almeno 5 caratteri e una massimo di 30");
      return false;
    };
  }

function checkTesto(testoInput) {
    var pattern=/^.{40,300}$/;
    tInput = ((testoInput.value).replace(/(\r\n|\n|\r)/gm," "));
    if (pattern.test(tInput)){
      togliErrore(testoInput);
      return true;
    }
    else{
      if (tInput=="")
        mostraErrore(testoInput, "Il campo testo non può essere vuoto");
      else
        mostraErrore(testoInput, "La descrizione corta deve avere almeno 40 caratteri e una massimo di 300");
      return false;
    }
  }

function checkTestoLong(testoInput) {
    var pattern=/^.{40,900}$/;
    tInput = ((testoInput.value).replace(/(\r\n|\n|\r)/gm," "));
    if (pattern.test(tInput)){
      togliErrore(testoInput);
      return true;
    }
    else{
      if (testoInput.value=="")
        mostraErrore(testoInput, "Il campo testo non può essere vuoto");
      else
        mostraErrore(testoInput, "La descrizione lunga deve avere almeno 40 caratteri e una massimo di 900");
      return false;
    }
  }

function checkAlt(testoInput) {
    var pattern=/^.{0,20}$/;
    if (pattern.test(testoInput.value)){
      togliErrore(testoInput);
      return true;
    }
    else{
      mostraErrore(testoInput, "L'alt dell'immagine deve essere di massimo 20 caratteri");
      return false;
    }
  }

  function checkDidascalia(testoInput) {
      var pattern=/^.{1,30}$/;
      if (pattern.test(testoInput.value)){
        togliErrore(testoInput);
        return true;
      }
      else{
        if (testoInput.value=="")
          mostraErrore(testoInput, "Il campo testo non può essere vuoto");
        else {
          mostraErrore(testoInput, "La didascalia dell'immagine deve essere di massimo 30 caratteri");
          }
        return false;
      }
    }

function checkFile(testoInput){
    var fileName = testoInput.value,
    idxDot = fileName.lastIndexOf(".") + 1,
    extFile = fileName.substr(idxDot, fileName.length).toLowerCase();
    if (!fileName){
      mostraErrore(testoInput,"Non hai caricato alcuna immagine");
      return false;
    }
    if (fileName && (extFile!="jpg" && extFile!="jpeg" && extFile!="png")){
      mostraErrore(testoInput,"Non hai caricato alcuna immagine");
      return false;
    }
    var FileSize = testoInput.files[0].size;
    if (FileSize > 500000) {
      mostraErrore(testoInput,"Il file è troppo grande per essere caricato");
      return false;
    }
    if (fileName){
      togliErrore(testoInput);
      return true;
    }
}

function checkRepeatPassword(passwordInput,passwordInput2){
  if (passwordInput.value==passwordInput2.value){
    togliErrore(passwordInput2);
    return true;
  }
  else{
    mostraErrore(passwordInput2, "Le password non corrispondono");
    return false;
  }
}

function togliErrore (input){
  var li= input.parentNode;
  if (li.childElementCount>=3)
    li.removeChild(li.lastChild);
}

function mostraErrore (input,testo){
  togliErrore(input);
  var li= input.parentNode;
  var span = document.createElement("span");
  span.className = "error";
  span.appendChild (document.createTextNode(testo));
  li.appendChild (span);
}


function checkReg(){
  var nome = document.getElementById("nome");
  var cognome = document.getElementById("cognome");
  var citta = document.getElementById("citta");
  var indirizzo = document.getElementById("indirizzo");
  var mail = document.getElementById("emailR");
  var nascita = document.getElementById("nascita");
  var password = document.getElementById("passwordR");
  var password1 = document.getElementById("passwordR1");

  var risultatoTestNome = checkNome(nome);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
  var risultatoTestCognome = checkNome(cognome);
  var risultatoTestCitta = checkNome(citta);
  var risultatoTestIndirizzo = checkIndirizzo(indirizzo);
  var risultatoTestMail = checkMail(mail);
  var risultatoTestNascita = checkNascita(nascita);
  var risultatoTestPassword = checkPassword(password);
  var risultatoTestPassword1 = checkRepeatPassword(password,password1);

  if (risultatoTestNome && risultatoTestCognome && risultatoTestCitta && risultatoTestIndirizzo && risultatoTestMail && risultatoTestNascita && risultatoTestPassword && risultatoTestPassword1)
    return true;
  else {
    return false;
  }
}

function checkModCorsi(){

  var titolo = document.getElementById("titolo");
  var testo = document.getElementById("testo");
  var testoLong = document.getElementById("testoLong");
  var alt = document.getElementById("alt");

  var risultatoTestTitolo = checkTitolo(titolo);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
  var risultatoTestTesto = checkTesto(testo);
  var risultatoTestAlt = checkAlt(alt);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
  var risultatoTestTestoLong = checkTestoLong(testoLong);

  if (risultatoTestTitolo && risultatoTestTesto && risultatoTestAlt && risultatoTestTestoLong)
    return true;
  else {
    return false;
  }
}

  function checkInsNews(){
    var titolo = document.getElementById("titolo");
    var testo = document.getElementById("testo");
    var alt = document.getElementById("alt");
    var file = document.getElementById("fileToUpload");


    var risultatoTestTitolo = checkTitolo(titolo);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
    var risultatoTestTesto = checkTesto(testo);
    var risultatoTestAlt = checkAlt(alt);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
    var risultatoTestFile = checkFile(file);

    if (risultatoTestTitolo && risultatoTestTesto && risultatoTestAlt && risultatoTestFile)
      return true;
    else {
      return false;
    }
  }

  function checkInsGalleria(){
    var testo = document.getElementById("testo");
    var alt = document.getElementById("alt");
    var file = document.getElementById("fileToUpload");

    var risultatoTestTesto = checkDidascalia(testo);
    var risultatoTestAlt = checkAlt(alt);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
    var risultatoTestFile = checkFile(file);

    if (risultatoTestTesto && risultatoTestAlt && risultatoTestFile)
      return true;
    else {
      return false;
    }
  }


  function checkDataOra(dataInput,oraInput){
    var patternData= /^(((0[1-9]|[12]\d|3[01])\/(0[13578]|1[02])\/((19|[2-9]\d)\d{2}))|((0[1-9]|[12]\d|30)\/(0[13456789]|1[012])\/((19|[2-9]\d)\d{2}))|((0[1-9]|1\d|2[0-8])\/02\/((19|[2-9]\d)\d{2}))|(29\/02\/((1[6-9]|[2-9]\d)(0[48]|[2468][048]|[13579][26])|((16|[2468][048]|[3579][26])00))))$/;
    var patternOra = /^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]$/;
    if (patternData.test(dataInput.value) && patternOra.test(oraInput.value)){
    togliErrore(oraInput);
      return true;
    }
    else{
      if (dataInput.value == "" || oraInput.value=="")
        mostraErrore(oraInput, "Inserire tutti i campi")
      else
        mostraErrore(oraInput, "Data (dd/mm/YYYY) oppure Ora (HH:mm:ss) non valide.")
      return false;
    }
  }

  function checkOra(oraInput){
    var patternOra = /^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]$/;
    if (patternOra.test(oraInput.value)){
      togliErrore(oraInput);
      return true;
    }
    else{
      if (oraInput.value=="")
        mostraErrore(oraInput, "Inserire tutti i campi")
      else
        mostraErrore(oraInput, "Ora (HH:mm:ss) non valida")
      return false;
    }
  }

  function checkInsPrenotazioni(){
    var data = document.getElementById("data");
    var ora = document.getElementById("ora");

    if (checkDataOra(data,ora))
    {
      return true;
    }
    else {
      return false;
    }
  }

  function checkInsCorsi(){

    var titolo = document.getElementById("titolo");
    var testo = document.getElementById("testo");
    var testoLong = document.getElementById("testoLong");
    var alt = document.getElementById("alt");
    var file = document.getElementById("fileToUpload");
    var ora = document.getElementById("ora");

    var risultatoTestTitolo = checkTitolo(titolo);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
    var risultatoTestTesto = checkTesto(testo);
    var risultatoTestAlt = checkAlt(alt);            //utilizzo la funzione checkNome per nome,cognome e città percchè hanno la stessa RegExp
    var risultatoTestTestoLong = checkTestoLong(testoLong);
    var risultatoTestFile = checkFile(file);
    var risultatoTestOra = checkOra(ora);

    if (risultatoTestTitolo && risultatoTestTesto && risultatoTestAlt && risultatoTestTestoLong && risultatoTestFile && risultatoTestOra)
      return true;
    else {
      return false;
    }
  }
