<?php

    require_once 'php/model/glossaire.php';

    //print_r($glossaire);
    function showRandomInfo($array)
    {
        $lenght = count($array);
        $index = mt_rand(0, $lenght -1 );
        $title = $array[$index]['title'];
        $description = $array[$index]['description'];

        $html = "<div><h1>Le terme est : {$title}</h1><p>La definition est : {$description}</p></div>";
//         <<<CODEHTML    
//         <div>
//             <h1>Le terme est : {$title}</h1>
//             <p>La definition est : {$description}</p>
//         </div>
// CODEHTML;  
   
   echo $html;

        //echo '<h1>';
        //print_r($array[$index]['title']);
        //echo '<br>';
        //echo '</h1>';
        //print_r($array[$index]['description']);
        
        //var_dump($index);
        
    }

    showRandomInfo($glossaire);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glossaire des termes</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <form>
        <button type="submite">Afficher un terme aléatoire</button>
    </form>
    
</body>
</html>