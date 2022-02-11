<html>

    <head>

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

        <table>
            <tr><td>Latitudine</td><td><input type="text" id="lat" size=15></td></tr>
            <tr><td>Longitudine</td><td><input type="text" id="lng" size=15></td></tr>
        </table>
        <div id="map" style="position:absolute;left:5px;top:90px;height:650px;width:850px"></div>

    </body>

</html>