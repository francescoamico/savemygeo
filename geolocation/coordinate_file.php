<html>

    <head>
        
        <style>
        
        body{
            background-color: blue;
        }
        input{
            width: 200px; 
            height: 30px;  
            text-align: center;
        }
        #invio {
            width: 90px; 
            height: 50px;
            background-color: #6777; 		
            color: #fff;               		
            font-weight: bold;        		
        }
        
        </style>

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=&sensor=true"></script> 
        <script>

            var lat='38.0222259';
            var lng='12.5251428';
            var coordinate=new google.maps.LatLng(lat,lng);
            var opzioni = {zoom: 17,center:coordinate,mapTypeId:google.maps.MapTypeId.ROADMAP}
            function inizializza(){
                marker=new google.maps.Marker({map:map,title:'ITI L. da Vinci',position:coordinate});
                stringa='<br><center>Benvenuti all\'<b><b>Istituto Tecnico Industriale<br>L.Da Vinci</b></b> di Trapani</b><br>';
                infowindow=new google.maps.InfoWindow({content:stringa,position:coordinate});
                var map=new google.maps.Map(document.getElementById('map'),opzioni);
                marker.setMap(map);
                infowindow.open(map,marker);
                google.maps.event.addListener(map,'click',
                    function(event){
                        infowindow.open(map,marker);
                        document.getElementById('lat').value=event.latLng.lat();
                        document.getElementById('lng').value=event.latLng.lng();
                    }
                );
            }

        </script>
        
    </head>

    <body onload="inizializza();">

        <center>
            <h1>Salva le coordinate<h1>
            <form method="post" action="coordinate_file.php">
                <table>
                    <tr><td><h3>Latitudine</h3></td><td><input type="text" id="lat" name="lat" ></td></tr>
                    <tr><td><h3>Longitudine</h3></td><td><input type="text" id="lng" name="lng" ></td></tr>
                </table>
                <br>
                <input type="submit" value="salva" id="invio"><br><br>
                <div id="map" style="position:center;height:400px;width:1000px"></div>
            </form>
        </center>

    </body>

    <?php
        
        $nome_file="coordinate.txt";
        $file= fopen($nome_file,"a");

        fputs($file,"\nLatitudine :: ". htmlspecialchars($_POST["lat"]) . "\nLongitudine :: " . htmlspecialchars($_POST["lng"]));

        fclose($file);
        
    ?>

</html>