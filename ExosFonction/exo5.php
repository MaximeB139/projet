<?php

 function calculerSurface($longueur, $largeur, $hauteur)
  {
    //$surface = $longueur * $hauteur * 2 + $largeur * $hauteur * 2;
    $surface = 2 * $hauteur * ($longueur + $largeur);
    return $surface;
  }
  $surface = calculerSurface (5, 4, 3);
  echo $surface;