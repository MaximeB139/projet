<?php
//on cree la fonction

 function comparer ($nombre1 , $nombre2 , $nombre3)

{
    if (($nombre1 < $nombre2) && ($nombre1 < $nombre3))
    $resultat = $nombre1; 
    
    elseif (($nombre3 < $nombre1) && ($nombre3 < $nombre2))
    $resultat = $nombre3; 

    else 
     $resultat = $nombre2; 

    return $resultat;
      }

//on apppelle la fonction
     
 
     $min=comparer(9,4,7) ;
     echo $min ;