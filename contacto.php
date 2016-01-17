<?php
require_once 'php/controller/web.controller.php';
$controller = new webController();
$listarubiquenos = call_user_func(array($controller, 'listarubiquenos'));
$listartel = call_user_func(array($controller, 'listartel'));
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Gnovare</title>
    <!-- stilos-->
    <link href="source/css/style.css" rel="stylesheet" media="screen">
    <!-- CSS de Bootstrap -->
    <link href="source/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- font-awesome-->
    <link href="source/css/font-awesome-4.5.0/css/font-awesome.min.css" rel="stylesheet" media="screen">
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Librería jQuery -->
    <script src="source/js/jquery-1.11.3.min.js"></script>
  </head>
  <body class="bodd">
  <div class="franja"></div>
      <div class="container">
      <br>
      <br>
      <br>
      <?php include "layout/header.php";?>

      <?php include "layout/contecontac.php";?>

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
                         <a   class="pages">PROYECTOS
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


    <!-- bootstrap js-->
    <script src="source/js/bootstrap.min.js"></script>
    <!-- formulario de contacto-->
    <script src="source/js/contacto.js"></script>
    <script src="source/js/menu.js"></script>
  </body>
</html>