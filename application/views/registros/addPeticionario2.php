<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BuscarV</title>

    <!-- Bootstrap Core CSS -->
   <link href="<?php echo base_url();?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css"      rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>assets/dist/css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url();?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
        <script src="<?php echo base_url();?>assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
 

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url();?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/morris/morris-data.js"></script>
    <!-- SCRIPTS Y ESTILOS DE BUSCARV JONATHAN CADENA-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui-1.9.1.custom.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/login.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css" />  
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/formulario.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.ajaxValidation.css" />            
 		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/ajaxSorterStyle/style.css?ver=1.0" /> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery.loader.css" />
	 	
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui-1.8.21.custom.min.js"></script> 		
    
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.ajaxsorter.js"></script>   
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.help.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.ajaxValidation.js"></script>
        
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.colorbox.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nicescroll.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.js" ></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.tablesorter.pager.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/date.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nicescroll.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/md5-min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.js" ></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.numeric.js" ></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.loader.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.boxloader.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.extends.js"></script>
    
    
    <!--mapa google -->
    <!--<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyDe1EXskkLEuvjNT20NBVcpH9BFTxEdpj4" type="text/javascript"></script>-->
    
    <script src="http://maps.google.com/maps/api/js?sensor=false" 
          type="text/javascript"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
<script src="http://code.highcharts.com/modules/no-data-to-display.js"></script>
    
    <style>
        
                .ajaxSorterDiv div.ajaxTable{
    display: block; 
    height: 245px;
    width: 100%;
    overflow-y: auto;
    padding: 0px;
    margin:10px 0px;    
	color:white;
    background-color: #FFFFFF;
}
table.ajaxSorter thead tr{	
    background-color:#2E64FE;   
    font-size: 9pt;
    font-weight: bold;
    color:white; 
	height:21px;
	
}
table.ajaxSorter thead tr th{ 
    padding: 3px 5px;  
    cursor: pointer;  
	
}
table.ajaxSorter tbody{
    cursor: pointer;
}

        
        table.ajaxSorter tbody tr td{
    font-family: sans-serif;     
	padding-top:4px;
    padding-left: 5px;  
	
	height:17px;
	border-bottom: solid 1px #FFFFFF;	
            
}
        table.ajaxSorter tbody tr{    
	height:21px;
    
}
table.ajaxSorter tbody tr:nth-child(even){    
  background-color: rgba(255, 255, 255, 0.78);
	color:white;
}
table.ajaxSorter tbody tr:nth-child(odd){    
    background-color: rgba(192,192, 192, 0.86);
}
table.ajaxSorter tbody tr.odd{/*FOR IE 7 y 8*/
	background-color:rgba(255, 255, 255, 0.78);
}
table.ajaxSorter tbody tr.even{
	background-color: rgba(192, 192, 192, 0.86);
	color:white;
}
table.ajaxSorter tbody tr.active:nth-child(even) td ,
table.ajaxSorter tbody tr.active:nth-child(odd) td{    
    color: lightcoral;
}
table.ajaxSorter tbody tr:hover{   
    background-color: #81BEF7;     
} 
        
        #map{
  min-width: 500px;
  width: 50%;
  min-height: 300px;
  height: 80%;
  border: 1px solid blue;
}
              #map1{
  min-width: 500px;
  width: 50%;
  min-height: 300px;
  height: 80%;
  border: 1px solid blue;
}
 
    </style>
    
    <script>
    
          function justNumbers(e)
        {
        var keynum = window.event ? window.event.keyCode : e.which;
        if ((keynum == 8) || (keynum == 46))
        return true;
         
        return /\d/.test(String.fromCharCode(keynum));
        }
  
      function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
    
        function aMays(e, elemento) {
tecla=(document.all) ? e.keyCode : e.which; 
 elemento.value = elemento.value.toUpperCase();
}
    
    
    
    </script>
 <script type="text/javascript">
    
    
		function init()
		{
			if(!checkGeolocationSupport())
			{
				alert("El navegador no soporta geolocalización");
			}

			
		
			findWhereAmI();
		}
    
        
        function checkGeolocationSupport()
		{
			return navigator.geolocation;
		}		
		
		function findWhereAmI()
		{
			navigator.geolocation.getCurrentPosition(onSuccessGeolocating, 
			                                         onErrorGeolocating,
			                                         {
			                                         		enableHighAccuracy: true,
			                                         		maximumAge:         5000,
			                                         		timeout:            20000
			                                         });
		}
		
		function onSuccessGeolocating(position)
		{
		/*	var userLocation = new google.maps.LatLng(position.coords.latitude, 
 			                                          position.coords.longitude);

			var message = "I am here!\n\n" + 
			              "\tLatitude = " + position.coords.latitude + "\n" + 
			              "\tLongitude = " + position.coords.longitude;

			var marker = new google.maps.Marker({
				position: userLocation, 
				map: map, 
				title: message
			});
 			                                          
			map.setCenter(userLocation);*/
            document.getElementById("form_latitud").value=position.coords.latitude;
            document.getElementById("form_longitud").value=position.coords.longitude;
       
         
		}
		
		function onErrorGeolocating(error)
		{
			switch(error.code)
			{
				case error.PERMISSION_DENIED:
					alert('ERROR:Usuario denego acceder a su ubicacion!');
				break;
				
				case error.POSITION_UNAVAILABLE:
					alert("ERROR: Ups no hemos podido acceder a tu ubicacion!");
				break;
				
				case error.TIMEOUT:
					alert("ERROR: Error de conexion, revise su conexion a internet!");
				break;
				
				default:
					alert("ERROR: No sabemos que pasa!");
				break;
			}
		}
    
    
    </script>
    
<!--Funcionamiento del sistema-->    
<script>
    
    $(document).ready(function(){
        
        initComponents();
        
        function initComponents(){
            
            fecha();
        }
        
        function fecha(){
            
            
            
            var f = new Date();
              var fecha=f.getFullYear() + "-" + (f.getMonth() +1) + "-" +f.getDate() ;
           
              
              $('#txtFecha').val(fecha);
        }
    
             $("#formularioInsertPeticionario").submit(function() {

             var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registros/insertar_reg"; // the script where you handle the form input.

                $.ajax({
                type: "POST",
                url: url,
                data: formData, // serializes the form's elements.
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false,
                success: function(data)
           {
               alert("Peticionario registrado de manera exitosa!"); // show response from the php script.
              
           }
         });

    return false; // avoid to execute the actual submit of the form.
        
        
    });
              $('#bttSubmit').click(function() {
                
                
                  if($("#formularioInsertPeticionario")[0].checkValidity()) {
        //your form execution code
                    $("#formularioInsertPeticionario").submit(); 
                       $("#form_nombre").val(" ");
                    $("#form_apellido_p").val(" ");
                    $("#form_apellido_m").val(" ");
                    $("#form_telefono").val(" ");
                    $("#form_peticiones").val(" ");
                    $("#observaciones").val(" ");
                  
                    
    }
                  else {
                   alert("Complete todos los campos marcados con (*)");
                }
             
                      
                
                                });
     
    });
    
    </script>

</head>

<body onload="init()">
<?php if($this->session->userdata("admin_login") and (($this->session->userdata("admin_login")->privilegio == 3) or ($this->session->userdata("admin_login")->privilegio == 2))){?>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">BuscarV</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->session->get_userdata ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $this->session->get_userdata ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>Jonathan Cadena</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Jonathan Cadena <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/registros/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/registros/goCandidato"><i class="fa fa-fw fa-dashboard"></i> Peticionarios</a>
                    </li>
                      <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAprobados1"><i class="fa fa-fw fa-desktop"></i> Aprobados</a>
                    </li>
                      <li >
                        <a href="<?php echo base_url();?>index.php/registros/goNoAprobados1"><i class="fa fa-fw fa-desktop"></i> No aprobados</a>
                    </li>
                       <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAtendidos1"><i class="fa fa-fw fa-desktop"></i> Atendidos</a>
                    </li>   
                         <li >
                        <a href="<?php echo base_url();?>index.php/registros/goTramites"><i class="fa fa-fw fa-desktop"></i> En tramite</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/registros/goEstadisticas1"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
                    </li>
                 
                 <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAddPeticionario"><i class="fa fa-fw fa-table"></i> Registro</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Descarga APP <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>assets/app/buscarv.apk">Android</a>
                            </li>
                            <li>
                                <a href="#">IOS</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <br>
                        <h1 class="page-header">
                            Agregar Peticionarios<small> Control</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> 
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
             
                <div class="row">
                               <div class="col-lg-6">
                         <form id="formularioInsertPeticionario" enctype="multipart/form-data" method="post">
                 <div class="form-group">
                    
                                            <label>Nombre(s):  *</label>
                                            <input type="text" id="form_nombre" onkeypress="return soloLetras(event);" name="form_nombre" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" required/>
                                            
                                        </div>
                        
                               <div class="form-group">
                                            <label>Apellido Paterno:  *</label>
                                            <input type="text" id="form_apellido_p" onkeypress="return soloLetras(event);" name="form_apellido_p" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" required/>
                                            
                                        </div>
                         <div class="form-group">
                                            <label>Apellido Materno:  *</label>
                                            <input type="text" id="form_apellido_m" onkeypress="return soloLetras(event);" name="form_apellido_m" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" required/>
                                            
                                        </div>
                         <div class="form-group">
                                            <label>Telefono:  *</label>
                                            <input type="text" id="form_telefono"  size="10" onkeypress="return justNumbers(event);" name="form_telefono" class="form-control" onblur="aMays(event, this)" required/>
                                            
                                        </div>
                                 <div class="form-group">
                                <label>Observaciones:</label>
                                <textarea id="observaciones" name="observaciones" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" rows="4"></textarea>
                            </div>
                                <div class="form-group">
                                            <label>Longitude:</label>
                                            <input type="text" id="form_longitud" name="form_longitud" class="form-control" required readonly/>
                                            
                                        </div>
                    </div>
                    <div class="col-lg-6">
                            <div class="form-group">
                                <label>Petición:</label>
                                <textarea id="form_peticiones" name="form_peticiones" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" rows="4"></textarea>
                            </div>
                    
                       <div class="form-group">
                                <label>Municipio:  *</label>
                                <select class="form-control"  id="form_municipio" name="form_municipio">
                                    <option value="Metepec">Metepec</option>
                                    <!--  <option value="Tenango del Valle">Tenango del Valle</option>
                                    <option value="Almoloya del Rio">Almoloya del Río</option>
                                    <option value="Calimaya">Calimaya</option>
                                    <option value="Rayon">Rayón</option>
                                    <option value="San Antonio la Isla">San Antonio la Isla</option>
                                    <option value="Texcalyacac">Texcalyacac</option>-->


                                  
                                </select>
                            </div>
                        <div class="form-group">
                                <label>Areá responsable:  *</label>
                                <select class="form-control"  id="area_responsable" name="area_responsable">
                                      <option value="Servicios Federales">Servicios Federales</option>
                                    <option value="Materiales/Regalos/Obsequios">Materiales/Regalos/Obsequios</option>
                                    <option value="Empleo">Empleo</option>
                                    <option value="Servicios del Municipio">Servicios del Municipio</option>
                                    <option value="Salud">Salud</option>
                                  
                                </select>
                            </div>
                          <div class="form-group">
                                <label>Prioridad:  *</label>
                                <select class="form-control"  id="txtPrioridad" name="txtPrioridad">
                                      <option value="2">Regular</option>
                                    <option value="1">Urgente</option>
                                  
                                  
                                </select>
                            </div>
                           <div class="form-group">
                                            <label>Fecha de capura:  *</label>
                                            <input type="text" id="txtFecha" name="txtFecha" class="form-control" required readonly/>
                                            
                                        </div>
                         <div class="form-group">
                                            <label>Latitude:</label>
                                            <input type="text" id="form_latitud" name="form_latitud" class="form-control" required readonly/>
                                            
                                        </div>
                      
               
                           
                    </div>
                         </form>
                    
                             
                          <div class="col-lg-6">
                                                 <button type="submit"  class="btn btn-success" id="bttSubmit">Registrar</button>

                </div>
                   
                                  
                  
                    </div>
            
                
                </div>
                
               
                <!-- /.row -->

       
                <!-- /.row -->

          
                  
                  
               
                <!-- /.row -->
       <footer>
            <div class="row">
                <center>
                <div class="col-lg-12">
                    <strong>
                    <p> &copy; 2016 BuscarV. Todos los derechos reservados. </p>
                    </strong>
                </div>
                    </center>
            </div>
            <!-- /.row -->
        </footer>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
<?php }?>
</body>

</html>
