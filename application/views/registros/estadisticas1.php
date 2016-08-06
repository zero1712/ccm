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

<!--Funcionamiento del sistema-->    
<script>
    
    $(document).ready(function(){
        
    document.getElementById("div_municipio").style.display="none";
        
        
    $("#tipo_consulta").change(function(){
        
        if($("#tipo_consulta").val()==1){
      document.getElementById("div_municipio").style.display="block";
            
    $("#municipio_select").change(function(){
        
           $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/registros/estadisticas_municipio",
                    type:"POST",
                    //dataType: 'json',
                    data:{
						municipio: $("#municipio_select").val()
					},
					success: function(datos){
                  
                      
				   var datos = $.parseJSON(datos);
                     
                        
                       // alert(tipo);
                    
                    
						  $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Estadisticas por Municipio: '+ $("#municipio_select").val()
        },
       
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Peticionarios'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Peticionarios: <b>{point.y:.1f} Peticionario</b>'
        },
        series: [{
            name: 'Population',
            data: [
               datos.datos[1],
                datos.datos[2],
                datos.datos[3],
                datos.datos[4],
               datos.datos[5]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
						var chart = $('#container').highcharts();
						console.log(chart);
                        
                        
                        
                        
						
					}
                    
				});
        
        
        
    });
            
     $("#municipio_select").trigger("change");       
            
        }
        
        
        if($("#tipo_consulta").val()==2){
            
            alert("Cambio filtro");
            document.getElementById("div_municipio").style.display="none";
            
              $.ajax({
					url:"<?php echo base_url(); ?>" + "index.php/registros/estadisticas_status",
                    type:"POST",
                    //dataType: 'json',
                    data:{
						municipio: $("#municipio_select").val()
					},
					success: function(datos){
                  
                      
				   var datos = $.parseJSON(datos);
                     
                        
                       // alert(tipo);
                    
                    
						  $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Estadisticas por Estatus: '+ $("#municipio_select").val()
        },
       
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Peticionarios'
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Peticionarios: <b>{point.y:.1f} Peticionario</b>'
        },
        series: [{
            name: 'Population',
            data: [
               datos.datos[0],
                datos.datos[1],
                datos.datos[2],
                datos.datos[3]
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
						var chart = $('#container').highcharts();
						console.log(chart);
                        
                        
                        
                        
						
					}
                    
				});
        }
    });
        
        
        
        
   $("#itipo_consulta").trigger("change");      
    });
    
    </script>

</head>

<body>
<?php if($this->session->userdata("admin_login") and $this->session->userdata("admin_login")->privilegio == 3){?>
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
                                <li >
                        <a href="<?php echo base_url();?>index.php/registros/goTramites1"><i class="fa fa-fw fa-desktop"></i> En tramite</a>
                    </li>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/registros/goEstadisticas1"><i class="fa fa-fw fa-bar-chart-o"></i> Estadísticas</a>
                    </li>
                 
                 <li >
                        <a href="<?php echo base_url();?>index.php/registros/goAddPeticionario2"><i class="fa fa-fw fa-table"></i> Registro</a>
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
                            Estadisticas<small> Control</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    
                    <div class="form-group">
                                <label>Consulta estadísticas por:</label>
                                <select class="form-control"  id="tipo_consulta" name="tipo_consulta">
                                      <option value="0">Seleccione</option>
                                    <option value="1">Municipio</option>
                                    <option value="2">Estatus de petición</option>
                          
                                  
                                </select>
                            </div>
                    
                </div>
                
                <div class="row">
                    
                    <div class="form-group" id="div_municipio">
                                <label>Seleccione el municipio:</label>
                                <select class="form-control"  id="municipio_select" name="municipio_select">
                                     <option value="Metepec">Metepec</option>
                                    <!--  <option value="Tenango del Valle">Tenango del Valle</option>
                                    <option value="Almoloya del Rio">Almoloya del Río</option>
                                    <option value="Calimaya">Calimaya</option>
                                    <option value="Rayon">Rayón</option>
                                    <option value="San Antonio la Isla">San Antonio la Isla</option>
                                    <option value="Texcalyacac">Texcalyacac</option>-->


                                    
                                            
                                    
                                  
                                </select>
                            </div>
                    
                </div>
                    <div class="row">
                        
                        <!--
                        <div class="form-group" >
                    
                    <label for="cambiar">Tipo de gráfica:</label>
                                <select name="cambiar" id="tipo_grafica" class="form_control" >
								
                                   
								   
								   <option value="pie">Pastel</option>
                                    <option value="bar">Barra</option>
                                    <option value="column">Columnas</option>
                                    <option value="line">Linea</option>
									
                                </select>
                         <label id="texto" style="display:none;"></label>
                    </div>-->
                <div id="container" style="width:100%;margin: 0 auto"></div>
                    
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
