<?php

include("conn_db.php");
include("functions.php");
navbar();


$result = displayData();
#sql tietojen haku taulukkoon

#$query = "SELECT * FROM TUOTTEET";  ## haku
#$result = mysqli_query($conn, $query); ## tietokannan yht.otto ja haku


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
    varastonäkymä
    <?php echo $_SESSION["username"]?><br>
    <?php echo  "käyttäjän rooli: ". $_SESSION["rooli"] ?> <br>


    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">diipaadaapaa</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center table-striped">
                            <tr>
                                <td> tuoteid </td>
                                <td> tuotenimi </td>
                                <td> kpl </td>
                                <td> varastopaikka </td>
                                <td> muokkaa </td>
                                <td> poista </td>
                            </tr>
                            <tr>
                            <?php
                                #looppaa joka rivin läpi
                                while($row = mysqli_fetch_assoc($result)){
                            ?>
                                <td><?php echo $row['tuoteid']; ?></td>
                                <td><?php echo $row['tuotenimi']; ?></td>
                                <td><?php echo $row['kpl']; ?></td>
                                <td><?php echo $row['varastopaikka']; ?></td>
                                <td><a href="#" class="btn btn-primary">Muokkaa</a></td>
                                <td><a href="#" class="btn btn-danger">Poista</a></td>
                            
                            </tr>
                            <?php
                            }
                            
                            ?>    
                            
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    
</body>
</html>