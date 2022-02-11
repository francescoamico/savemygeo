<html>

    <head>

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=&sensor=true"></script> 
        <script>

            var lat='38.0222259';
            var lng='12.5251428';
            var coordinate=new google.maps.LatLng(lat,lng);
            var opzioni = {zoom: 17,center:coordinate,mapTypeId:google.maps.MapTypeId.ROADMAP}
            var image={
                url:'mark.png',
                size: new google.maps.Size(32.32),
                origin: new google.maps.Point(0,0),
                anchor: new google.maps.Point(0,32)
            };
            function inizializza(){
                map=new google.maps.Map(document.getElementById('map'),opzioni);
                marker=new google.maps.Marker({position:coordinate,map:map,icon:image,title:"ITI L. da Vinci"});
                google.maps.event.addListener(marker,'click',function(){});
                var stringa="<br><center>Benvenuti all\' <b>"+marker.getTitle()+" di Trapani</b><br><img src='scuola.png' width='300' height='150'>";
                var infowindow=new google.maps.InfoWindow({content:stringa});
                infowindow.open(map,marker);
            }

        </script>
        
    </head>

    <body onload="inizializza();">
        <center> 
            <br><br>
            <div id="map" style="position:center;height:650px;width:850px"></div>
        </center>
    </body>

</html>