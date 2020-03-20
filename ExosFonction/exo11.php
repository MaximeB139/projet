<?php


function creerInsertSQL ($nomTable, $tabAssoColVal)
{
    // ON DOIT CONCATENER LES INFORMATIONS RECUES EN PARAMETRE
    // POUR OBTENIR LE CODE SQL ATTENDU

    // VALEURS INITIALES
    $liste1 = "";
    $liste2 = "";

    // JE VEUX EXTRAIRE LES CLES DU TABLEAU ASSOCIATIF
    // => BOUCLE
    // ATTENTION: JE SUIS OBLIGE DE CREER LA VARIABLE $valeur 
    // MEME SI ELLE NE SERT PAS

    // ASTUCE: SI J'AI BESOIN DE L'INDICE ALORS JE LE RAJOUTE EN PLUS 
    $indice = 0;
    foreach($tabAssoColVal as $cle => $valeur)
    {
        // echo "(DEBUG:$cle/$valeur)";

        // ASTUCE: ON UTILISE $indice POUR SAVOIR SI ON EST SUR LE PREMIER ELEMENT
        if ($indice == 0)
        {
            // PREMIER ELEMENT: PAS DE VIRGULE
            $liste1 = $liste1 . $cle;
            $liste2 = $liste2 . ":". $cle;
        }
        else
        {
            // LES ELEMENTS APRES: AVEC VIRGULE
            $liste1 = $liste1 . ", " . $cle;
            $liste2 = $liste2 . ", :". $cle;

        }

        // IL NE FAUT PAS OUBLIER DE L'INCREMENTER
        $indice++;
    }

    $resultat = 
<<<CODESQL

INSERT INTO $nomTable
( $liste1 )
VALUES
( $liste2 )

CODESQL;


    // ON DOIT RENVOYER UN TEXTE QUI EST UN CODE SQL
    return $resultat;
}

$requeteSQLPreparee = creerInsertSQL(
    "newsletter", 
    [ "nom" => "julie", "email" => "julie@nomail.me" ]);

echo "<pre>$requeteSQLPreparee</pre>";

/*
ON DEVRAIT OBTENIR LE TEXTE CONCATENE

INSERT INTO newsletter
( nom, email )
VALUES
( :nom, :email )

*/

