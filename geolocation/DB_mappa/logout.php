<?php
  session_start();
  session_unset();
  session_destroy();
  $_SESSION = array();
  header('Location:http://localhost/geolocalizzazione/DB_mappa/index.php');
?>


