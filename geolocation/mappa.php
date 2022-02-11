<html>

    <head> 

        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=&sensor=true"></script>
        <script>
            /*api di google maps*/  
            var lat='38.01841254927259';/*latitudine Trapani*/  
            var lng='12.522869110107422';/*longitudine Trapani*/  
            var coordinate=new google.maps.LatLng(lat,lng);  
            var opzioni ={ zoom: 10,   center:coordinate,   mapTypeId:google.maps.MapTypeId.ROADMAP }   
                
            function inizializza(){ 
                var mappa=new google.maps.Map(document.getElementById('mappa'),opzioni);
            }    

        </script>
            
    </head> 

    <body onload="inizializza();">   
        <div id="mappa" style="position:absolute;left:5px;top:9px;height:650px;width:850px"></div>   
    </body>

</html>