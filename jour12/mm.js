function valideselect() {   
    var select = document.getElementById('optin'); 
    var choice = select.selectedIndex; 
    var text =  select.options[choice].value; 
    
   // si la valeur choisie est 'oui' 
   if(text == 'oui') { 
     // alors on envoie le formulaire 
     return true; 
   } 
   else { 
     // sinon on affiche un message et on bloque l'envoi 
     alert('Veuillez choisir "oui" SVP'); 
     return false; 
   } 
 }

const popup = document.querySelector("#popup");
popup.addEventListener('click', openPopup);
function openPopup()
{
  window.open("popup.php");
}

  


