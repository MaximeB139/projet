<?php


$nbInfo = count($_REQUEST);
if ($nbInfo > 0)
{
    
    $nom        = $_REQUEST["nom"];
    $email      = $_REQUEST["email"];
    $message    = $_REQUEST["message"];


    $messageStocke =

<<<texte

    nom: $nom
    email: $email
    message:
    $message

texte;
    
    file_put_contents("php/model/contact.txt", $messageStocke, FILE_APPEND);
    echo "Merci pour l'attention que vous portez a mon CV.M(me)r $nom ($email). Je vous recontacterais au plus vite.";
}

?>
