<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello All !</h1>
    <?php
        $pages = ['home', 'about', 'contact'];
        if (isset($_GET['page'])) {
            if (in_array($_GET['page'], $pages)) {
                echo "Requested page is : {$_GET['page']}";
            } else {
                echo 'Page not found';
            }
        }
    ?>
</body>
</html>