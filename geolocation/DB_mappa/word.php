<?php

   session_start();
   $nomefile="coordinate.doc";
   header ("Content-Type: application/vnd.ms-word");
   header ("Content-Disposition: inline; filename=$nomefile");
   echo "Coordinate dell'utente :: ";
   echo $_SESSION["username"];
   echo"<br><br><table>";
   echo"<tr><td>Latitudine</td><td>Longitudine</td></tr><tr></tr>";
   include("config.inc.php");
   $dati="SELECT Latitudine, Longitudine FROM dati WHERE username='".$_SESSION["username"]."'";
   $result=mysqli_query($link,$dati);
   while($array=mysqli_fetch_assoc($result)){
       echo"<tr><td>$array[Latitudine]</td><td>$array[Longitudine]</td></tr>";
   }
   echo"</table>";
   
?>