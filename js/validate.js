/*+++++++++ Verifica input vuoto, nullo o indefinito +++++++++*/
function valVoid(ris, form, nameInput){
  let res   = document.getElementById(ris);
  let objInput = document.forms[form][nameInput];
  let input = objInput.value;

  const validStr = (str) => str ? true : false
  input = input.trim();

  if (!validStr(input) || input.length<1) {
    res.setAttribute("class", "erro");
    res.innerText = "Campo vuoto!";
    objInput.classList.add("rosso");

    setTimeout(function(){ document.getElementById(ris).removeAttribute("class") }, 6000);
    return false;
  }

  objInput.classList.remove("rosso");
  return true;
}

/*+++++++++++ VERIFICA NOMI ++++++++++++++++++*/
function valName(ris, form, input) {
  let res   = document.getElementById(ris);
  let objInput = document.forms[form][input];
  let nome = objInput.value;

  const validStr = (str) => str ? true : false
  nome = nome.trim();

  if(!valVoid(ris, form, input)) return false;

  // VERIFICA Nomi
  filter = /([a-zA-Z\à\è\ì\ò\ù\À\È\Ì\Ò\Ù\á\é\í\ó\ú\ý\Á\É\Í\Ó\Ú\Ý\â\ê\î\ô\û\Â\Ê\Î\Ô\Û\ã\ñ\õ\Ã\Ñ\Õ\ä\ë\ï\ö\ü\ÿ\Ä\Ë\Ï\Ö\Ü\Ÿ\ç\Ç\ß\Ø\ø\Å\å\Æ\æ\œ\'])+$/;
  if (!filter.test(nome)) {
    res.setAttribute("class", "erro");
    res.innerText = "Nomi non validi!";
    objInput.classList.add("rosso");
    setTimeout(function(){ document.getElementById(ris).removeAttribute("class") }, 6000);
    return false;
  }

  objInput.classList.remove("rosso");
  return true;
}

/*+++++++++++ VERIFICA EMAIL ++++++++++++++++++*/
function valEmail(ris, form, input) {
  let res   = document.getElementById(ris);
  let objInput = document.forms[form][input];
  let email = objInput.value;

  const validStr = (str) => str ? true : false
  email = email.trim();

  if(!valVoid(ris, form, input)) return false;

  // VERIFICA EMAIL
  let filter = /^(\s)*([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+(\s)*$/;
  if (!filter.test(email)) {
    res.setAttribute("class", "erro");
    res.innerText = "Email non valida!";
    objInput.classList.add("rosso");
    //document.forms[form].reset();
    setTimeout(function(){ document.getElementById(ris).removeAttribute("class") }, 6000);
    return false;
  }

  objInput.classList.remove("rosso");
  return true;
}

/*+++++++++++ VERIFICA Password ++++++++++++++++++++*/
function valPassword(ris, form, pass1, pass2) {

  let res   = document.getElementById(ris);
  let objPass1 = document.forms[form][pass1];
  let passw = objPass1.value;
  let objPass2 = document.forms[form][pass2];
  let confi = objPass2.value;

  const validStr = (str) => str ? true : false
  passw = passw.trim();
  confi = confi.trim();

  if(!valVoid(ris, form, pass1)) return false;
  if(!valVoid(ris, form, pass2)) return false;

  // VERIFICA Password
  if (passw != confi) {
    res.setAttribute("class", "erro");
    res.innerText = "Password non uguali!";
    objPass1.classList.add("rosso");
    objPass2.classList.add("rosso");
    setTimeout(function(){ document.getElementById(ris).removeAttribute("class") }, 6000);
    return false;
  }

  objPass1.classList.remove("rosso");
  objPass2.classList.remove("rosso");
  return true;
}



function valLogin(ris, form) {
  let res   = document.getElementById(ris);
  let email = document.forms[form]["email"].value;
  let passw = document.forms[form]["pass"].value;

  const validStr = (str) => str ? true : false
  email = email.trim();
  passw = passw.trim();

  if(!valVoid(ris, form, "pass")) return false;// Non lo faccio per l'email perché lo fa 'valEmail'

  if(!valEmail(ris, form, "email")) return false;

  return true;
}



function valSignup(ris, form) {

  let res   = document.getElementById(ris);
  let nome  = document.forms[form]["firstname"].value;
  let cogno = document.forms[form]["lastname"].value;
  let email = document.forms[form]["email"].value;
  let passw = document.forms[form]["pass"].value;
  let confi = document.forms[form]["confirm"].value;
  let filter;

  const validStr = (str) => str ? true : false
  nome  = nome.trim();
  cogno = cogno.trim();
  email = email.trim();
  passw = passw.trim();
  confi = confi.trim();

  if(!valName(ris, form, "firstname")) return false;
  if(!valName(ris, form, "lastname")) return false;

  if(!valPassword(ris, form, "pass", "confirm")) return false;

  if(!valEmail(ris, form, "email")) return false;

  return true;
}