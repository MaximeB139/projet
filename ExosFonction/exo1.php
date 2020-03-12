<?php
//on cree la fonction

 function comparer ($nombre1 , $nombre2)

{
    if ($nombre1 < $nombre2)
    $resultat = $nombre1;

    else $resultat = $nombre2;

    return $resultat;
      }

//on apppelle la fonction
     
 
     $min=comparer(6,2) ;
     echo $min ;
