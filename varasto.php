<?php
include("conn_db.php");
include("functions.php");


navbar();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-light m-5">
    <h1>Varaston kotisivu</h1>
    <?php echo $_SESSION["username"]?><br>
    <?php echo  "käyttäjän rooli: ". $_SESSION["rooli"] ?>
    
    
    
</body>
</html>