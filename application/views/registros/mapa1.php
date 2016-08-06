<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <title>Sistema Georreferenciacion de Arboles Metepec (SGAM)</title>
      
       <!-- Bootstrap Core CSS -->
   <link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css"      rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style>
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #map {
        float: left;
        height: 90%;
        width:100%;
      }
         #formContent{
        position: bottom;
        width: 30%;
        height: 4%;
             
        margin: 0 auto;
    }
    /* #content-window {
        float: left;
        font-family: 'Roboto','sans-serif';
        height: 100%;
        line-height: 30px;
        padding-left: 10px;
        width: 20%;
        }/*
    </style>
      
      
     <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui-1.9.1.custom.css" /> 
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.21.custom.min.js"></script> 		
    
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDe1EXskkLEuvjNT20NBVcpH9BFTxEdpj4&signed_in=true&callback=initMap">
    </script>
       
          <script>

    
 
        
   function initMap(){    
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: {lat: 20.25, lng: -98.3167}
  });

  var kmlLayer = new google.maps.KmlLayer({
    url: "<?php echo base_url();?>assets/kml/"+$("#municipio").val()+".kml",
    suppressInfoWindows: false,
    map: map
  });

 /* kmlLayer.addListener('click', function(kmlEvent) {
    var text = kmlEvent.featureData.description;
    showInContentWindow(text);
  });

  function showInContentWindow(text) {
    var sidediv = document.getElementById('content-window');
    sidediv.innerHTML = text;
  }*/
        
   }

              
              $(document).ready(function(){
                  
                    $("#municipio").change(function(){
                       var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: {lat: 20.25, lng: -98.3167}
  });
                         var ctaLayer = new google.maps.KmlLayer({
     url: "<?php echo base_url();?>assets/kml/"+$("#municipio").val()+".kml",
    suppressInfoWindows: false,
    map: map
   });

                     
        
                  
                  
              });
              
     $("#municipio").trigger("change"); 
              });
    </script>
  </head>
  <body>
      <?php if($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 5){?>
    <div id="map"></div>
   
       <div id="formContent" >
                        <label>Busqueda por delegaciòn:</label>
                        <select class="form-control" id="municipio" name="municipio">
                            <option value="0">Seleccione delegaciòn:</option>
                            <option value="1">San Bartolome Tlaltelulco</option>
                            <option value="2">San Miguel Totocuitlapilco</option>
                            <option value="3">San Sebastian</option>
                            <option value="4">San Lucas Tunco</option>
                            <option value="5">La Union</option>
                             <option value="6">Santa Cruz Ocotitlan</option>
                             <option value="7">Santa Maria Magdalena Ocotitlan</option>
                             <option value="8">Agripin Garcia Estrada</option>
                             <option value="9">San Jorge Pueblo Nuevo</option>
                             <option value="10">Las Margaritas</option>
                            <option value="11">San Lorenzo Coacalco</option>
                             <option value="12">Barrio de San Miguel</option>
                             <option value="13">Dr. Jorge Jimenez Cantu</option>
                             <option value="14">San Gaspar Tlalhuelilpan</option>
                             <option value="15">Barrio del Espiritu Santo</option>
                             <option value="16">Barrio de Santiaguito</option>
                            <option value="17">Luisa Isabel Campos de Jimenez Cantu</option>
                             <option value="18">La Michoacana</option>
                             <option value="19">Barrio de Santa Cruz</option>
                             <option value="20">La Virgen</option>
                             <option value="21">Barrio de San Mateo</option>
                             <option value="22">Electricistas</option>
                            <option value="23">Jesus Jimenez Gallardo</option>
                             <option value="24">Municipal</option>
                             <option value="25">Las Jaras</option>
                             <option value="26">Andres Molina Enriquez</option>
                             <option value="27">San Jose La Pilita</option>
                             <option value="28">Xinantecatl</option>
                            <option value="29">Juan Fernandez Albarran</option>
                             <option value="30">Real de San Javier</option>
                             <option value="31">Lazaro Cardenas</option>
                             <option value="32">La Purisima</option>
                             <option value="33">Rancho San Francisco</option>
                             <option value="34">Barrio de Coaxustenco</option>
                            <option value="35">Bellavista</option>
                             <option value="36">Izcalli Cuauhtemoc IV</option>
                             <option value="37">Lazaro Cardenas</option>
                             <option value="38">Las Haciendas</option>
                             <option value="39">Izcalli Cuauhtemoc V</option>
                             <option value="40">Izcalli Cuauhtemoc VI</option>
                            <option value="41">El Hipico</option>
                             <option value="42">Izcalli Cuauhtemoc II</option>
                             <option value="43">Izcalli Cuauhtemoc III</option>
                             <option value="44">San Francisco Coaxusco</option>
                             <option value="45">Fuentes de San Gabriel</option>
                             <option value="46">Club de Golf San Carlos</option>
                            <option value="47">Rancho San Lucas</option>
                             <option value="48">La Providencia</option>
                             <option value="49">Las Marinas</option>
                             <option value="50">Izcalli Cuauhtemoc I</option>
                             <option value="51">San Salvador Tizatlalli</option>
                             <option value="52">La Asuncion</option>
                            <option value="53">Francisco I. Madero</option>
                             <option value="54">Tollocan II</option>
                             <option value="55">San Jeronimo Chicahualco</option>
                             <option value="56">Los Pilares</option>
                             <option value="57">Casa Blanca</option>
                             <option value="58">Limite municipal</option>
                            <option value="59">Alvaro Obregon</option>
                            
                            
                        
                            
                   
                        </select>
                    </div>
      </div>

    <?php }?>
  </body>
</html>