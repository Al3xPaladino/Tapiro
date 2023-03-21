function showPasw(idText, idInput) {
  if(document.getElementById(idText).innerText == "Mostra"){
    document.getElementById(idInput).setAttribute("type", "text");
    document.getElementById(idText).innerText = "Nascondi";
  }else{
    document.getElementById(idInput).setAttribute("type", "password");
    document.getElementById(idText).innerText = "Mostra";
  }
}

let url = window.location.hash;
let lastPart = url.split('#')[1];
// if(lastPart == "register") formSignup();
if(lastPart == "email") document.getElementById('popup').style.display = "block";

// Get the modal
var modal = document.getElementById('popup');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}