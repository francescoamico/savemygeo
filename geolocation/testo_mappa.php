<html>

    <head>
    
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=&sensor=true&sensor=true"></script>
        <script>

            var lat='38.0222259';
            var lng='12.5251428';
            var coordinate=new google.maps.LatLng(lat,lng);
            var opzioni = {zoom: 17,center:coordinate,mapTypeId:google.maps.MapTypeId.ROADMAP}
            function inizializza(){
                marker=new google.maps.Marker({title:"ITI L. da Vinci",position:coordinate});
                stringa='<br><center>Benvenuti all\'<b><b>Istituto Tecnico Industriale<br>L.Da Vinci</b></b> di Trapani</b><br>';
                infowindow=new google.maps.InfoWindow({content: stringa,position:coordinate});
                var mappa=new google.maps.Map(document.getElementById('mappa'),opzioni);
                marker.setMap(mappa);
                infowindow.open(mappa,marker);
            }

        </script>

    </head>

    <body onload="inizializza();">
        <div id="mappa" style="position:absolute;left:5px;top:9px;height:650px;width:850px"></div>
    </body>

</html>