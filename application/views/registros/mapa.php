<html>
<head>
   <title>Arbolitos</title>
   
   <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.css" />
   <!--[if lte IE 8]><link rel="stylesheet" href="leaflet/leaflet.ie.css" /><![endif]-->
   
   <script src="http://cdn.leafletjs.com/leaflet-0.7.5/leaflet.js"></script>
   
   <!-- Bring in the leaflet KML plugin -->
   <script src="<?php echo base_url();?>assets/js/KML.js"></script>  
   	
   <script language="javascript">
      function init() {
         var map = new L.Map('map');                       
        
      	 L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',
            maxZoom: 18
         }).addTo(map);
         map.attributionControl.setPrefix(''); // Don't show the 'Powered by Leaflet' text.
                                                             
         var kmlLayer = new L.KML("<?php echo base_url();?>assets/kml/doc.kml", {async: true});
                                                              
         kmlLayer.on("loaded", function(e) { 
            map.fitBounds(e.target.getBounds());
         });
                                                
         map.addLayer(kmlLayer);
         
      }
   </script>
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        height: 100%;
      }
    </style>
</head>
<body onLoad="javascript:init();">
   <div id="map"></div>
   
</body>            
</html>