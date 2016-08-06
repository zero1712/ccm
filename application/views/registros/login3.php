<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Demo del script:   ¿Cómo hacer un login de usuarios en php?</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="description" content="Efectúa tus propias pruebas on-line. Para ejecutarlo en tu sitio necesitas del framework CodeIgniter, provisto gratis por la empresa de hosting Solo10.com." />
<meta name="keywords" content="php, login, codeigniter, hosting, demo, web hosting, script, usuarios" />

<link rel="stylesheet" href="http://www.blogdephp.com/script/php-login.css" type="text/css" media="screen">
<link rel="stylesheet" href="http://www.blogdephp.com/script/addtoany.min.css" type="text/css" media="screen">

<!--<link rel="stylesheet" href="../../php-login.css" type="text/css" media="screen">-->
<meta name="google-site-verification" content="xWxEFUMgHER4nLx6TAXD9rHFhclvQkEX-RX6qClbszI" />
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-20047775-3']);
_gaq.push(['_trackPageview']);

(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();

</script>

<meta property="og:title" content="¿Cómo hacer un login de usuarios en php y codeigniter? Ver script y demo !" />
<meta property="og:type" content="blog" />
<meta property="og:url" content="http://www.blogdephp.com/script/php/login/" />
<meta property="og:image" content="http://www.blogdephp.com/images/php.gif" />
<meta property="og:site_name" content="www.blogdephp.com" />
<meta property="fb:admins" content="100001608753773" />

</head>

<body style="margin-top:0px">
<?php echo form_open('php/login/'); ?>
<div class="Info">
   <p class="Titulo"><h1>Demo del script:   <a href="/php-login/">¿Cómo hacer un login de usuarios en php y codeigniter?</a></h1></p>
   <p> </p>   
</div>
<div id="LoginUsuarios">
   <div class="fila">
      <div class="LoginUsuariosCabecera">E-mail:</div>
      <div class="LoginUsuariosDato"><input type="text" name="maillogin" value="<?= set_value('maillogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError">
      <?
      if(isset($error)){
         echo "<p>".$error."</p>";
      }
      echo form_error('maillogin');
      ?>
      </div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera">Contraseña:</div>
      <div class="LoginUsuariosDato"><input type="password" name="passwordlogin" value="<?= set_value('passwordlogin'); ?>" size="25" /></div>
      <div class="LoginUsuariosError"><?= form_error('passwordlogin');?></div>
   </div>
   <div class="fila">
      <div class="LoginUsuariosCabecera"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
   <div class="fila">
      <div class="LoginUsuariosCabecera"><input type="submit" value="Ingresar"></div>
      <div class="LoginUsuariosDato"></div>
   </div>      
</div>
</form>
<p> </p>
<div class="Info">
   <p><u><h2>Datos de acceso (demo)</h2></u></p>
   <p> </p>   
   <p>(correspondiente a un usuario ya ingresado en la base de datos)</p>
   <p><strong>e-mail</strong>: diego@blogdephp.com</p>
   <p><strong>password</strong>: blogdephp</strong></p>
</div>
<p> </p>   
<!--<p><iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fblogdephp.com%2Fscript%2Fphp%2Flogin&layout=standard&show_faces=true&width=450&action=like&colorscheme=light&height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:50px;" allowTransparency="true"></iframe></p>   -->
<div class="addtoany_share_save_container"><div class="a2a_kit addtoany_list"><iframe class="addtoany_special_service facebook_like" src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Fblogdephp.com%2Fphp-login%2F&layout=button_count&show_faces=false&width=75&action=like&colorscheme=light&height=15" frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:90px;height:20px"></iframe><iframe class="addtoany_special_service twitter_tweet" src="http://platform.twitter.com/widgets/tweet_button.html?url=http%3A%2F%2Fblogdephp.com%2Fphp-login%2F&counturl=http%3A%2F%2Fblogdephp.com%2Fphp-login%2F&count=horizontal&text=%C2%BFC%C3%B3mo%20hacer%20un%20login%20de%20usuarios%20en%20Php%20y%20Codeigniter%3F: " frameborder="0" scrolling="no" style="border:none;overflow:hidden;width:80px;height:20px"></iframe><a class="a2a_button_linkedin" href="http://www.addtoany.com/add_to/linkedin?linkurl=http%3A%2F%2Fblogdephp.com%2Fphp-login%2F&linkname=%C2%BFC%C3%B3mo%20hacer%20un%20login%20de%20usuarios%20en%20Php%20y%20Codeigniter%3F" title="LinkedIn" rel="nofollow" target="_blank"><img src="http://blogdephp.com/wp-content/plugins/add-to-any/icons/linkedin.png" width="16" height="16" alt="LinkedIn" border="0" style="margin-right:20px; "/></a><a class="a2a_dd addtoany_share_save" href="http://www.addtoany.com/share_save"><img src="http://blogdephp.com/wp-content/plugins/add-to-any/share_save_171_16.png" width="171" height="16" alt="Share" border="0"/></a></div>
<script type="text/javascript"><!--
var a2a_config = a2a_config || {};
a2a_localize = {
   Share: "Compartir",
   Save: "Guardar",
   Subscribe: "Suscribirse",
   Email: "E-mail",
Bookmark: "Marcador",
   ShowAll: "Mostrar todo",
   ShowLess: "Mostrar menos",
   FindServices: "Buscar servicios(s)",
   FindAnyServiceToAddTo: "Buscar servicio",
   PoweredBy: "Servicio ofrecido por",
   ShareViaEmail: "Compartir por e-mail",
   SubscribeViaEmail: "Suscribirse por e-mail",
   BookmarkInYourBrowser: "Agregar a marcadores de tu navegador",
   BookmarkInstructions: "Presione Ctrl+D o Cmd+D para marcar esta pagina",
   AddToYourFavorites: "Agregar a favoritos",
   SendFromWebOrProgram: "Enviar de cualquier dirección de e-mail o programa de e-mail",
EmailProgram: "Programa de e-mail"
};
a2a_config.linkname="¿Cómo hacer un login de usuarios en Php y Codeigniter?";
a2a_config.linkurl="http://blogdephp.com/php-login/";
//--></script><script type="text/javascript" src="http://static.addtoany.com/menu/page.js"></script>
<div class="Info">
   <p><u><h2>Requerimientos necesarios en tu web hosting para poder ejecutar el script</h2></u></p>
   <p> </p>   
   <p>Para poder implementar este script de login, se requiere el framework de php "Codeigniter"</p>
   <p>(esta maravillosa herramienta nos ayuda a ahorrar mucho tiempo y esfuerzo en nuestros trabajos de programación php).</p>
   <p> </p>
   <p>La empresa <a href="http://www.solo10.com/productos/WebHostingLinux/?safblogdephp">Solo10.com</a>, cuando contratas un paquete de hosting anual desde u$s 49.95,</p>
   <p>te ofrece la instalación y configuración inicial del Codeigniter gratis :-)</p>
   <p> </p>   
   <p>Este blog y demo se encuentran alojados en los servidores de Solo10.com.</p>
   <p>Te recomiendo el <a href="http://www.solo10.com/productos/WebHostingLinux/?safblogdephp">servicio de hosting</a> que ofrece esta empresa de hablahispana!</p>
</div>
<p> </p>   
<div class="Info">
   <p><a href="http://www.blogdephp.com/">Ver más artículos y scripts de php y codeigniter</a></p>
</div>
</body>
</html>