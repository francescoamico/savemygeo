<?php
  session_start();
  if(!isset($_SESSION["start_time"])){
    header('Location:http://http://localhost/geolocalizzazione/DB_mappa/log-in.php');
    die;
  }
  else {
    $now = time();
    $time = $now - $_SESSION["start_time"];
    if ($time > 3600){
      header('Location:http://http://localhost/geolocalizzazione/DB_mappa/logout.php');
      die;
    }
  }
?>
