<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"type="text/css">

</head>
<body>
    <header>
    <input type="button" value="cliquez ici" id="popup">
    


    </header>
    <main>
        <h1>test JS</h1>
        <form action="test.php" method="get"> 
 
  <select name="optin" id="optin"> 
    <option value="oui">Je choisis oui</option> 
    <option value="non">Je choisis non</option> 
  </select>  
  <input type="submit" onclick="return valideselect()" />   

   </form>
    
    </main>
    <footer>
    
    </footer>
    <script src="mm.js"></script>
</body>
</html>