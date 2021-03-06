<?php
require_once 'php/controller/web.controller.php';
$controller = new webController();
$listslider = call_user_func(array($controller, 'listslider'));
?>
<!--
autor:Cristians A. Tregante
email: cristians159@gmail.com
desarrollado por www.innovatechperusac.com
-->
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
  </head>
  <body class="bodd">
  <div class="franja"></div>
      <div class="container">
      <br>
      <br>
      <br>
      <?php include "layout/header.php";?>
      <div class="blanco">
          <div id="wowslider-container1">
             <div class="ws_images">
                 <ul>
                  <?php foreach ($listslider as $rowslider) {?>
                  <li><img src="../web/<?php echo $rowslider->archivo; ?>" alt="<?php echo $rowslider->nombre; ?>" title="<?php echo $rowslider->nombre; ?>" id="wows1_<?php echo $rowslider->idbanner; ?>"/></li>
                <?php } ?>
                </ul>
            </div>
          </div>

      </div>
      <nav class="blanco">
              <ul class="nav nav-pills tresproyects" >
                <li role="presentation">
                  <a href="proyectos.php?c=1" class="ttres">
                  PROYECTOS EN VENTA
                  </a>
                </li>
                <li role="presentation">
                  <a href="proyectos.php?c=2" class="ttres">
                  PROYECTOS TERMINADOS
                  </a>
                </li>
                <li role="presentation">
                  <a href="proyectos.php?c=3" class="ttres">
                  PRÓXIMOS PROYECTOS
                  </a>
                </li>
              </ul>
      </nav>
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
                        <!-- <li>
                         <a href="proyectos.php"  class="pages">PROYECTOS
                            <p>Conoce nuestros Proyectos</p>
                         </a>
                        </li> -->
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
                        <li>
                          <a href="contacto.php"  class="pages">

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
    <!-- bootstrap js-->
    <script src="source/js/bootstrap.min.js"></script>
    
  </body>
</html>