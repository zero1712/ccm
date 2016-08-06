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

<!--Funcionamiento del sistema-->    
<script>
$(document).ready(function(){
     //<![CDATA[

    function load(latitud,longitud,peticionario) {
   /*var locations = [
    [peticionario, latitud, longitud, 4],
      
    ];*/

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(latitud,longitud),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker;

   // for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(latitud,longitud),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker) {
        return function() {
          infowindow.setContent(peticionario);
          infowindow.open(map, marker);
        }
      })(marker));
    
    //}
     google.maps.event.addListener(map, "idle", function(){
        google.maps.event.trigger(map, 'resize'); 
    });
}
                    

//]]>
    //<![CDATA[
        function loadall(datos) {
   /*var locations = [
    [peticionario, latitud, longitud, 4],
      
    ];*/
            var datos=datos;
           

    var map = new google.maps.Map(document.getElementById('map1'), {
      zoom: 15,
      center: new google.maps.LatLng(19.2528864,-99.598551),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < datos.peticionario.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(datos.latitud[i],datos.longitud[i]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker,i) {
        return function() {
          
          infowindow.setContent(datos.peticionario[i]);
          infowindow.open(map, marker);
        }
      })(marker,i));
    
    }
     google.maps.event.addListener(map, "idle", function(){
        google.maps.event.trigger(map, 'resize'); 
    });
}
                    

//]]>
    InitComponents();
    
    function InitComponents(){
        cargarRegistros();
       StatusSelectDialog(0);
        postContactDialog(0);
        mapaDialog(0);
                $("#btnDelete").css("background-image", "url('<?php echo base_url();?>assets/images/Trash.png')");

    }
    
    
      function cargarRegistros(){
        $("#Alumnos").ajaxSorter({
        url:'<?php echo base_url();?>index.php/registros/getRegistrosAtendidos',
        multipleFilter:true, 
        filters:['carreras'], 
        paginator:true  , 
            onRowClick:function(){
                if($(this).data('id')!=undefined){
                  
                          if($(this).data('id')!=undefined){
                  
                    var id=$(this).data('id');
                    var bandera=0;
                    
                    
                   $.ajax({
            url: "<?php echo base_url();?>index.php/registros/getDataReg",
            type: "POST",
            data:{
						        id: id
					},
            success: function(data){
                var datos = $.parseJSON(data);
                 if (datos==0){
                     
                      $.ajax({
            url: "<?php echo base_url();?>index.php/registros/insertDatosReg",
            type: "POST",
                           data:{
						        id: id
					},
            success: function(){
                
                    bandera = 1;
                    
                                }

                    });
                     
                 }
                else{
                    bandera =0;
                   
                }
                                }

                    });
              
                 
                    
                    if(bandera==0 || bandera ==1 ){
                        
                         $("#status").html('');	
    			    $("#txtPeticion").val($(this).data('peticion'));
                    $("#txtNombres").val($(this).data('nombre'));
                    $("#txtApellidop").val($(this).data('apellidop'));
                    $("#txtApellidom").val($(this).data('apellidom'));
                    $("#txtLatitud").val($(this).data('latitud'));
                    $("#txtLongitud").val($(this).data('longitud'));
                    $("#txtId").val($(this).data('id'));
                    $("#txtFechaP").val($(this).data('fecha_captura'));
                    $("#txtAreaResponsable").val($(this).data('area_responsable'));
                    $("#txtTelefono").val($(this).data('telefono'));
                    $("#txtObservaciones").val($(this).data('observaciones'));
                    $("#txtMunicipio").val($(this).data('municipio'));
                    if(($(this).data('prioridad'))=='Urgente'){ $("#txtPrioridad").val(1);}
                    if(($(this).data('prioridad'))=='Regular'){ $("#txtPrioridad").val(2);}
              $("#status").append("<option value=' '>Seleccione:</option> <option value='Atendido'>Atendido</option> <option value='1'>Aprobado</option> <option value='2'>No aprobado</option><option value='4'>En tramite</option>");	
                    $("#txtNombre").val($(this).data('nombre')+' '+$(this).data('apellidop')+' '+$(this).data('apellidom'));
                    $("#txtNombre1").val($(this).data('nombre')+' '+$(this).data('apellidop')+' '+$(this).data('apellidom'));
                     $("#txtId1").val($(this).data('id'));
                    var latitud= null;
                    var longitud=null;
                    var peticionario=null;
                        
                          $("#txtCodigoPostal").val($(this).data('codigo_postal'));
                    $("#txTClveElect").val($(this).data('clv_elector'));
                    $("#txtDireccion").val($(this).data('direccion'));
                    $("#txtColonia").val($(this).data('colonia'));
                    $("#fechaNac").val($(this).data('fecha_nac'));
                    $("#email").val($(this).data('email'));
                     $("#txtSeccionElectoral").val($(this).data('seccion_electoral'));
                    peticionario= document.getElementById("txtNombre").value;
                    latitud = document.getElementById("txtLatitud").value;
                    longitud = document.getElementById("txtLongitud").value;
                    load(latitud,longitud,peticionario);
                    StatusSelectDialog(1);

                        
                    }
                    
                    
                                                            }
                   
                                            }      
             
            }
                                            });    
           
                                                                    }
    
     function StatusSelectDialog(opc){
        if(opc==0){
            $("#StatusSelect").dialog({
                autoOpen:false,
                modal:true,
                resizable:false,
                width:600,
                height:500,
                fluid:true,
                title:'Seleccionar Status',
                color:'black',
                
                buttons:[{
                    id:"btnDelete",
                    text:" .",
                    icons: {
        primary: "ui-icon ui-icon-refresh"
      },
                    click:function(){
                        
                              if (confirm('Dese eliminar el peticionario '+$("#txtId").val()+'?\n Si lo elimina toda la información se perdera. ')) { 
                                  $.ajax({
            url: "<?php echo base_url();?>index.php/registros/eliminarReg",
            type: "POST",
            data:{
                    id: $("#txtId").val()
            },
            success: function(data){
                alert("Peticionario eliminado de manera correcta!");
                                }

                    });
                       }
                        else{
                            
                            alert('Se cancelo la eliminación');
                        }
                        		
                    }
                },{
                    id:"btnAprobacion",
                    text:"Aprobación candidato",
                    click:function(){
                                 $.ajax({
            url: "<?php echo base_url();?>index.php/registros/AprobacionCandidato",
            type: "POST",
            data:{
                    id: $("#txtId").val()
            },
            success: function(data){
                alert("Hecho!");
                                }

                    });
                       }
                        		
                    
                },{
                    id:"btnGuardar",
                    text:"Guardar",
                    click:function(){
                       if(($("#status option:selected").text())=="Seleccione:"){
                        
                     if (confirm('El campo status esta vacio, si continua la peticion cambiara al modulo de post-contact\n ¿Desea continuar?')) { 
                                $("#formulario").submit();
                                                                                                                            }
                                                                        }
                            if(($("#status option:selected").text())=="Aprobado"){
                        
                     if (confirm('El campo status es aprobado, si continua la peticion cambiara al modulo de Aprobados\n ¿Desea continuar?')) { 
                                $("#formulario").submit();
                                                                                                                            }
                                                                        }
                                    if(($("#status option:selected").text())=="No aprobado"){
                        
                     if (confirm('El campo status es No aprobado, si continua la peticion cambiara al modulo de No Aprobados\n ¿Desea continuar?')) { 
                                $("#formulario").submit();
                                                                                                                            }
                                                                        }
                                      if(($("#status option:selected").text())=="Atendido"){
                        
                     if (confirm('El campo status es Atendido, si continua la peticion cambiara al modulo de Atendidos\n ¿Desea continuar?')) { 
                                $("#formulario").submit();
                                                                                                                            }
                                                                        }
                       }
                        		
                    
                },{
                    id:"btnActualizar",
                    text:"Modificar",
                    click:function(){
                                 
                        $.ajax({//JALAR LA INFORMACION
  url: "<?php echo base_url();?>index.php/registros/getData_Reg",
  type: "POST",
  data:{        
     txtId: $("#txtId").val()
  },
  context: document.body
}).done(function(dato) {
    var datos = $.parseJSON(dato);  
    $("#txtCodigoPostal").val(datos[0].codigo_postal);  
    $("#txtDireccion").val(datos[0].direccion);
    $("#txTClveElect").val(datos[0].clv_elector);
    $("#fechaNac").val(datos[0].fecha_nac); 
    $("#txtColonia").val(datos[0].colonia);  
    $("#email").val(datos[0].email);                        
                            
                            
                            
  $( this ).addClass( "done" );
});
                        
                        postContactDialog(1);
                        
                    }
                },{
                  id:"btnCerrar",
                  text:"Cerrar",
                  click:function(){
                      $(this).dialog('close');
                  }  
                } ]
                        
                
            });
        }
         else{
           
            $("#StatusSelect").dialog('open');
        }
     }
    
    
     function postContactDialog(opc){
        if(opc==0){
            $("#postContact").dialog({
               autoOpen:false,
                modal:true,
                resizable:false,
               width:600,
                height:500,
                fluid:true, 
                title:'Post Contact',
                color:'black',
                
                buttons:[{
                    id:"btnGuardar",
                    text:"Guardar",
                    click:function(){
                       /*if($("#file").val()==" "){
                       	alert('Favor de seleccionar un archivo');
                       }else{
                       		Elemento='file';
                            if(checkFile(Elemento) ){*/
                                    $("#formularioPostContact").submit();    
                           // }
                       }
                        		
                    
                },{
                  id:"btnCerrar",
                  text:"Cerrar",
                  click:function(){
                      $(this).dialog('close');
                  }  
                } ]
                        
                
            });
        }
         else{
           
            $("#postContact").dialog('open');
        }
     }
        function mapaDialog(opc){
        if(opc==0){
            $("#mapAll").dialog({
               autoOpen:false,
                modal:true,
                resizable:false,
               width:600,
                height:500,
                fluid:true, 
                title:'Mapa de Peticionarios',
                color:'black',
                
                buttons:[{
                  id:"btnCerrar",
                  text:"Cerrar",
                  click:function(){
                      $(this).dialog('close');
                  }  
                } ]
                        
                
            });
        }
         else{
           
            $("#mapAll").dialog('open');
        }
     }
    $("#formulario").submit(function(e){
            	  
                var formObj = $(this);
                var formData = new FormData(this);
               
               
                $.ajax({
                    url:'<?php echo base_url();?>index.php/registros/insertStatus',
                    type: 'POST',
                    data:  formData,
                    mimeType:"multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(){
                    alert('Se ha cambiado el estado'); 
                    },
                     error: function(jqXHR, textStatus, errorThrown) {
                    }          
                });
                e.preventDefault(); //Prevent Default action. 
        });
    
$('#bttToCsv').click(function() {

            $.ajax({
            url: "<?php echo base_url();?>index.php/registros/writeToCsv",
            type: "POST",
            success: function(){
                    alert('Se Generara el .CSV de todos los registros existentes'); 
                    var link = "<?php echo base_url();?>index.php/registros/writeToCsv";
                    window.open(link,'newStuff');
                                }

                    });
                                });
    $('#bttMapa').click(function() {

            $.ajax({
            url: "<?php echo base_url();?>index.php/registros/getAllPositions",
            type: "POST",
            success: function(data){
                var datos = $.parseJSON(data);
                   loadall(datos);
                    mapaDialog(1);
                                }

                    });
                                });
    
    $("#formularioPostContact").submit(function() {
                var formObj = $(this);
                var formData = new FormData(this);
                var url = "<?php echo base_url();?>index.php/registros/insertPostContact"; // the script where you handle the form input.

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
               alert("Se inserto la informacion de manera exitosa!"); // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
});
    
    });
    
    
    </script>

</head>

<body>
<?php if($this->session->userdata("admin_login") and (($this->session->userdata("admin_login")->privilegio == 2) or ($this->session->userdata("admin_login")->privilegio == 3))){?>

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
                        <a href="<?php echo base_url();?>index.php/registros/status_view"><i class="fa fa-fw fa-dashboard"></i> Peticionarios</a>
                    </li>
                      <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAprobados"><i class="fa fa-fw fa-desktop"></i> Aprobados</a>
                    </li>
                      <li >
                        <a href="<?php echo base_url();?>index.php/registros/goNoAprobados"><i class="fa fa-fw fa-desktop"></i> No aprobados</a>
                    </li>
                       <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAtendidos"><i class="fa fa-fw fa-desktop"></i> Atendidos</a>
                    </li>
                         <li >
                        <a href="<?php echo base_url();?>index.php/registros/goTramites"><i class="fa fa-fw fa-desktop"></i> En tramite</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/registros/goEstadisticas"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
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
                            Atendidos <small>Gestión</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

           
                <!-- /.row -->

                <div class="row">
                  <div class="col-lg-12">
                      <div class="grid_1" style="width: 30%; display:none;">
                        <label>Criterio de busqueda:</label>
                        <select class="form-control" id="carreras" name="carreras">
                        <option value="20">Todos</option>
                   
                        </select>
                    </div>
<br><br>
            <div class="ajaxSorterDiv" id="Alumnos">
                    <span class="ajaxTable">
                    <table id="myTable_y" class="ajaxSorter">
                        <thead  title="Presione las columnas para ordenarlas como requiera">
                                            <th data-order="id">ID</th>
                                            <th data-order="nombre">Nombre(s)</th>
                                            <th data-order="apellidop">Apellido Paterno</th>
                                            <th data-order="apellidom">Apellido Materno</th>
                                            <th data-order="telefono">Telefono</th>
                                            <th data-order="peticion">Peticion</th>
                                            <th data-order="municipio">Municipio</th>
                                            <th data-order="area_responsable">Area Responsable</th>
                                            <th data-order="prioridad">Prioridad</th>
                        </thead>
                        <tbody></tbody>
                    </table>
             </span>
        </div> 
                 <div class="row">
                 <div class="col-lg-12">
                     <div class="col-lg-6" style="width: 30%;">
                    <!-- <button type="button" class="btn btn-primary" id="bttToCsv" name="bttToCsv" >Generar                           CSV</button>-->
                     <button type="button" class="btn btn-success" id="bttMapa" name="bttMapa" >Mapa                               Peticionarios</button>
                           <button type="button" class="btn btn-success" id="bttToCsv" name="bttToCsv" >Generar CSV</button>
                         
                     </div>
               
                     </div>
                      
                 
                 </div>
    </div>
                </div>
                <!-- /.row -->

              
                
                <div class="row">
                    
                      
             <!--Div para Agregar,modificar los fragmentos de la tesina-->
    <div  class="container_6 mifondo" id="StatusSelect">
        <form enctype="multipart/form-data" id="formulario" name="formulario" class="EnviarFragmentos" method="post">
            
            
           
           
            <input type="text" id="txtId" name="txtId" style="display:none;">
            
            <div class="col-lg-12" style="display:none">
                <label>Nombre(s):</label>
                <input class="form-control" type="text" name="txtNombre1" readonly="readonly" id="txtNombre1" >
            </div>
            
            <div class="col-lg-6">
            <div class="form-group">
                <label>Nombre(s):</label>
                 <input class="form-control"  type="text" id="txtNombres"  name="txtNombres" style="display:block;" onkeypress="return soloLetras(event);">
            </div>
                <div class="form-group">
                <label>Apellido paterno:</label>
                <input  class="form-control" type="text" id="txtApellidop" name="txtApellidop" style="display:block;" onkeypress="return soloLetras(event);">
            </div>
                <div class="form-group">
                <label>Fecha de petición:</label>
                <input class="form-control" type="text" name="txtFechaP" readonly="readonly" id="txtFechaP" >
            </div>
               <div class="form-group">
                                <label>Municipio:  *</label>
                                <select class="form-control"  id="txtMunicipio" name="txtMunicipio">
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
                                <label>Área responsable:  *</label>
                                <select class="form-control"  id="txtAreaResponsable" name="txtAreaResponsable">
                                      <option value="Servicios Federales">Servicios Federales</option>
                                    <option value="Materiales/Regalos/Obsequios">Materiales/Regalos/Obsequios</option>
                                    <option value="Empleo">Empleo</option>
                                    <option value="Servicios del Municipio">Servicios del Municipio</option>
                                    <option value="Salud">Salud</option>
                                  
                                </select>
                            </div>
                   <div class="form-group">
                                <label>Petición:</label>
                                <textarea id="txtPeticion" name="txtPeticion" class="form-control" onkeyup="aMays(event, this)" onblur="aMays(event, this)" rows="4"></textarea>
                            </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                <label>Apellido materno:</label>
                 <input class="form-control"  type="text" id="txtApellidom"  name="txtApellidom" style="display:block;" onkeypress="return soloLetras(event);" >
            </div>
            <div class="form-group">
                <label>Teléfono:</label>
                <input class="form-control" type="text" name="txtTelefono" id="txtTelefono" onkeypress="return justNumbers(event);" >
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select class="form-control" type="text" id="status" readonly="readonly" name="status" >
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
                <label>Latitud:</label>
                <input class="form-control" type="text" name="txtLatitud" readonly="readonly" id="txtLatitud" >
            </div>
                    <div class="form-group">
                <label>Longitud:</label>
                <input class="form-control" type="text" name="txtLongitud" readonly="readonly" id="txtLongitud" >
            </div>
                
           
            </div>
            <div class="col-lg-12">
            <div class="form-group">
            <label>Observaciones: </label>
                                <textarea id="txtObservaciones" name="txtObservaciones" class="form-control" rows="4" ></textarea>
                            </div>
            
            </div>
          
          
         
            
           
          
        </form>
               <div class="col-lg-12">
                 
                    
                        
<div width="100%" id="map"></div>
                   
                        
            </div>
                     </center>
       
    </div> 
          
            <!-- Div para postContact-->
              <div  class="container_6 mifondo" id="postContact">
        <form enctype="multipart/form-data" id="formularioPostContact" name="formularioPostContact" class="EnviarPostContact" method="post">
            
             <input type="text" id="txtNombres"  name="txtNombres" style="display:none;">
            <input type="text" id="txtApellidop" name="txtApellidop" style="display:none;">
             <input type="text" id="txtApellidom"  name="txtApellidom" style="display:none;">
            <input type="text" id="txtId1" name="txtId1" style="display:none;">
            <div class="col-lg-6">
                <div class="form-group">
                <label>Nombre(s):</label>
                <input class="form-control" type="text" name="txtNombre" readonly="readonly" id="txtNombre" >
            </div>
           <div class="form-group">
                <label>Código Postal:</label>
                <input class="form-control" type="text" name="txtCodigoPostal"  id="txtCodigoPostal" onkeypress="return justNumbers(event);" >
            </div>
            <div class="form-group">
                <label>Clave de Elector:</label>
                <input class="form-control" type="text" name="txTClveElect" id="txTClveElect" >
            </div>
               <div class="form-group">
                <label>Sección Electoral:</label>
                <input class="form-control" type="text" name="txtSeccionElectoral" id="txtSeccionElectoral" onkeypress="return justNumbers(event);">
            </div>
            
            </div>
            <div class="col-lg-6">
                
            <div class="form-group">
                <label>Dirección:</label>
                <input class="form-control" type="text" name="txtDireccion" id="txtDireccion" placeholder="Calle/Numero" >
            </div>
        
            <div class="form-group">
                <label>Colonia:</label>
                <input class="form-control" type="text" name="txtColonia"  id="txtColonia" >
            </div>
            <div class="form-group">
                <label>Correo Electrónico:</label>
                <input class="form-control" type="email" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input class="form-control" type="date" name="fechaNac" id="fechaNac">
            </div>
            </div>
            
            
           
            
       
    </div>
                    
                </div>
                    
                    
                    <div class="row">
                     <div  class="container_6 mifondo" id="mapAll">
                         <center>
                         <div id="map1"></div>
                   </center>
                        </div>
                    </div>
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
