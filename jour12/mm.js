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

 var element = document.getElementById('clickme');
    
    // Premier événement click
    element.addEventListener('click', function() {
        alert("Est tu sur ?");
    });
    // Deuxième événement click
    element.addEventListener('click', function() {
        alert("Vraiment sur ?");
    });
    element.addEventListener('click', function() {
        alert("jure woula !");
    });
