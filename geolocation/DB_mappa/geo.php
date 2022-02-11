<?php
    session_start();
    if($_SESSION["username"]!=null){
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 5.0 Transitional//EN">
<html>
    <head>
        <meta charset="utf-8">
        <title>Mappa</title>
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <style>
            .login-box {
            width: 320px;
            height: 640px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 52%;
            left: 15%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }
            .login-box2 {
            width: 1050px;
            height: 700px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 50%;
            left: 63%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }     .login-box {
            width: 320px;
            height: 640px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 52%;
            left: 15%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }
            .login-box2 {
            width: 1050px;
            height: 700px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 50%;
            left: 63%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }     .login-box {
            width: 320px;
            height: 640px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 52%;
            left: 15%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }
            .login-box2 {
            width: 1050px;
            height: 700px;
            backdrop-filter:blur(5px);
            background:rgba(0,0,0,0.5);
            color: #fff;
            top: 50%;
            left: 63%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
            }
        </style>
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=&sensor=true"></script> 
        <script>
            var map;
            var lat='38.0222259';
            var lng='12.5251428';
            var coordinate=new google.maps.LatLng(lat,lng);
            var opzioni = {zoom: 17,center:coordinate,mapTypeId:google.maps.MapTypeId.ROADMAP}
            function inizializza(){
                marker=new google.maps.Marker({map:map,title:'ITI L. da Vinci',position:coordinate});
                stringa="<br><center style='color:black;'>Benvenuti all\'<b><b>Istituto Tecnico Industriale<br>L.Da Vinci</b></b> di Trapani</b><br><img                                    src='css/img/scuola.png'width='300' height='150'>"; 
                infowindow=new google.maps.InfoWindow({content:stringa,position:coordinate});
                map=new google.maps.Map(document.getElementById('map'),opzioni);
                marker.setMap(map);
                infowindow.open(map,marker);
                google.maps.event.addListener(map,'click',
                    function(event){
                        infowindow.open(map,marker);
                        document.getElementById('lat').value=event.latLng.lat();
                        document.getElementById('lng').value=event.latLng.lng();
                        coordinate=new google.maps.LatLng(document.getElementById('lat').value,document.getElementById('lng').value);
                        var opzioniSV = {
                            position:coordinate,
                            pov: {
                                heading: 34,
                                pitch: 10
                            }
                        };
                        var panorama=new google.maps.StreetViewPanorama(document.getElementById('strada'),opzioniSV);
                        map.setStreetView(panorama);
                    }
                );
            }
        </script>
    </head>
    <body onload="inizializza();">
        <div class="login-box" >
            <img src="css/img/avatar4.png" class="avatar" alt="Avatar Image">
            <h1>Mappa</h1>
            <br>
            <form ACTION="geo.php" METHOD="POST">
                <label for="latitudine">Latitudine</label>
                <input type="text" id="lat" name="lat" value="38.0222259" placeholder="Latitudine" required>
                <label for="longitudine">Longitudine</label>
                <input type="text" id="lng" name="lng" value="12.5251428" placeholder="Longitudine" required>
                <br><br>
                <input type="submit" name="salva" value="Salva">
            </form>
            <form ACTION="excel.php" METHOD="POST">
                <input type="submit" value="Stampa file excel">
            </form>
            <form ACTION="word.php" METHOD="POST">
                <input type="submit" value="Stampa file word">
            </form>
            <form ACTION="pdf.php" METHOD="POST">
                <input type="submit" value="Stampa file pdf">
            </form>
            <form ACTION="logout.php" METHOD="POST">
                <input type="submit" value="Log-out">
            </form>
        </div> 
        <div class="login-box2">
            <h1 align="center" style=" position:absolute; top: 5px;left:380px">Mappa e street view</h1>
            <div id="map" style=" position:absolute; top: 80px;left:460px;height:600px;width:550px;"></div>
            <div id="strada" style=" position:absolute; top:80px; left:43px; height:600px; width:400px"></div>
        </div>   
        <?php
            $user = $_SESSION["username"];
            include ("config.inc.php"); 
            if(isset($_POST["salva"])){
            $query = "SELECT codice FROM utenti WHERE username='".$user."'";
            $result = $link -> query($query);
            $result = ($result->fetch_row())[0];
            $query="INSERT INTO dati (username,latitudine,longitudine,codice) VALUES ('".$user."', '".$_POST['lat']."', '".$_POST['lng']."', '$result')";
            $result = $link -> query($query);
            }
        }else{
            header('Location:http://localhost/geolocalizzazione/DB_mappa/index.php');
        }
        ?>
    </body>
</html>