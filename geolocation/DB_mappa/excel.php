<?php

    session_start();
    $nomefile="coordinate.xls";
    header ("Content-Type: application/vnd.ms-excel");
    header ("Content-Disposition: inline; filename=$nomefile");
    echo "Coordinate dell'utente :: ";
    echo $_SESSION["username"];
    echo"<table>";
    echo"<tr><td>Latitudine :</td><td>Longitudine :</td></tr>";
    include("config.inc.php");
    $dati="SELECT Latitudine, Longitudine FROM dati WHERE Username='".$_SESSION["username"]."'";
    $result=mysqli_query($link,$dati);
    while($array=mysqli_fetch_assoc($result)){
        echo"<tr><td>$array[Latitudine]</td><td>$array[Longitudine]</td></tr>";
    }
    echo"</table>";
    
?>