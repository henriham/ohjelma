<?php



#testataan toimiiko sessioni kansiossa
function testfunc(){
    if(isset($_SESSION["rooli"]))
    echo "rooli on olemassa";
}


function navbar(){
    if($_SESSION["rooli"]== "Yllapito"){
        include("navbaradmin.php");
    }
    else{
        include("navbaruser.php");
    }
        
}

function displayData(){
    global $conn;
    $query = "SELECT * FROM tuotteet";
    $result = mysqli_query($conn, $query);
    return $result;
}


?>