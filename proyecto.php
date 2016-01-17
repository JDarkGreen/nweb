<?php
require_once 'php/controller/web.controller.php';
$controller = new webController();
$listdatosproyectos = call_user_func(array($controller, 'listdatosproyectos'), $_REQUEST['id']);
if (count($listdatosproyectos) < 1) {
	header('Location: proyectos.php');
}
if (is_numeric(@$_REQUEST['id'])) {
	$listarsliderproyect = call_user_func(array($controller, 'listarsliderproyect'), $_REQUEST['id']);
	$listdatosproyectos = call_user_func(array($controller, 'listdatosproyectos'), $_REQUEST['id']);
	$listartiposplanosareas = call_user_func(array($controller, 'listartiposplanosareas'), $_REQUEST['id']);
	$listarareasproy = call_user_func(array($controller, 'listarareasproy'), $_REQUEST['id']);
	$listaravancesproy = call_user_func(array($controller, 'listaravancesproy'), $_REQUEST['id']);
	$listarmapaubic = call_user_func(array($controller, 'listarmapaubic'), $_REQUEST['id']);
} else {
	header('Location: proyectos.php');
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset=utf-8>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gnovare</title>
    <!-- custom scrollbar stylesheet -->
  <link rel="stylesheet" href="source/css/jquery.mCustomScrollbar.css">
    <!-- stilos-->
    <link href="source/css/style.css" rel="stylesheet" media="screen">
    <!-- CSS de Bootstrap -->
    <link href="source/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- SLIDER -->
    <link rel="stylesheet" type="text/css" href="source/images/slider/engine1/style.css" />
    <!-- font-awesome-->
    <link href="source/css/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Librería jQuery -->
    <script src="source/js/jquery-1.11.3.min.js"></script>
    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="source/js/jquery.fancybox.js?v=2.1.5"></script>
    <link rel="stylesheet" type="text/css" href="source/css/jquery.fancybox.css?v=2.1.5" media="screen" />
  </head>
  <body class="bodd">
  <div class="franja"></div>
      <div class="container">
      <br>
      <br>
      <br>
      <div class="header clearfix">
          <nav>
            <ul class="nav nav-pills pull-right telefos">
              <li role="presentation">
                <a href="#" class="dat">
                <i class="fa fa-phone-square"></i> (+51)444-0664
                </a>
              </li>
              <li role="presentation">
                <a href="#" class="dat">
                <i class="fa fa-mobile"></i> (+51)999-808-002
                </a>
              </li>
              <br>
              <li  class="enlacs">
                <a href="http://www.gnovare.com/webmail" target="_blank" class="enl bor">
                 Webmail
                </a>
              </li>
              <li  class="enlacs">
                <a href="http://www.gnovare.com/web/admin" target="_blank" class="enl">
                 Sistema
                </a>
              </li>
            </ul>
          </nav>
          <h3 class ="text-muted">
          <?php foreach ($listdatosproyectos as $rowproyecto) {
	?>
                    <img src="../web/<?php echo $rowproyecto->logo ?>" alt="logo empresa" class="logoempre">
                  <?php }
?>
          </h3>
      </div>
      <?php include "layout/cuerpo.php";?>

    </div>
    <br>
    <nav class="navbar navbar-default"  style="background-color: transparent;">
            <div class="container-fluid" style="background-color: #f8f8f8;">
              <div class="container">
                  <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="index.php"  style="margin-left: 0px;">
                        <img src="source/images/logoem.jpg" alt="logo empresa" class="logoempre">
                      </a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                       <ul class="nav navbar-nav navpages">
                        <li>
                          <a href="index.php" class="pages">INICIO
                            <p>Bienvenidos</p>
                          </a>
                        </li>
                        <li>
                          <a href="empresa.php" class="pages">EMPRESA
                            <p>Conoce a nuestra empresa</p>
                          </a>
                        </li>
                        <li id="lisale">
                         <ul class="flot">
                                <li><a href="proyectos.php?c=1">PROYECTOS EN VENTA</a></li>
                                <li><a href="proyectos.php?c=2">PROYECTOS TERMINADOS</a></li>
                                <li><a href="proyectos.php?c=3">PRÓXIMOS PROYECTOS</a></li>
                            </ul>
                         <a  class="pages">PROYECTOS
                            <p>Conoce nuestros Proyectos</p>
                         </a>
                        </li>
                        <li>
                          <a href="ubiquenos.php"  class="pages">UBÍQUENOS
                            <p>Un mápa de nuestra oficina</p>
                          </a>
                        </li>
                        <li>
                          <a href="contacto.php"  class="pages">CONTÁCTENOS
                            <p>Deje su consulta</p>
                          </a>
                        </li>
                      </ul>
                  </div>
              </div>
            </div>
            <div class="container">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 foter">
                    <p>Todos los derechos reservados GNOVARE2015</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 foter" style="text-align:right">
                    <p>Desarrollado por <a href="#">Compihost</a></p>
                </div>
            </div>
      </nav>
    <!-- slider -->
  <script type="text/javascript" src="source/images/slider/engine1/wowslider.js"></script>
  <script type="text/javascript" src="source/images/slider/engine1/script.js"></script>
    <!-- script menus lateral-->
    <script src="source/js/items.js"></script>
    <!-- bootstrap js-->
    <script src="source/js/bootstrap.min.js"></script>
    <!-- custom scrollbar plugin -->
  <script src="source/js/jquery.mCustomScrollbar.js"></script>
  <script>
    (function($){
      $(window).load(function(){


        $(".hidee").mCustomScrollbar({
          setHeight:600,
          theme:"dark-3"
        });

      });
    })(jQuery);
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $(".fancybox").fancybox();
    });
  </script>
  <!-- formulario de contacto-->
    <script src="source/js/contacto.js"></script>
    <script src="source/js/menu.js"></script>
  </body>
</html>