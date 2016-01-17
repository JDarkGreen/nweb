		<div id="desc" class="hidee respreg">
			<div id="wowslider-container1" style="width:60%;margin-bottom:20px;">
		         <div class="ws_images">
		             <ul>
					  <?php
if (count($listarsliderproyect) > 0) {
	foreach ($listarsliderproyect as $row) {
		?>
		              <li><img src="../web/<?php echo $row->archivo ?>"/></li>
					 <?php
}} else {
	echo "<li><img src='../web/upload//nohay.jpg'/></li>";
}
?>		            </ul>
		        </div>
      		</div>
			<h3 class="titupper2">Descripción del Proyecto</h3>
      		<p><?php
foreach ($listdatosproyectos as $rowproyecto) {
	echo utf8_decode($rowproyecto->descripcion);

}
?></p>

			  <h3 class="titupper2">Ambientes por Departamento</h3>
			  <ul>
			  <?php
foreach ($listdatosproyectos as $rowproyecto) {
	echo utf8_decode($rowproyecto->textos);

}
?>
			  </ul>
			  <h3 class="titupper2">Recorrido Virtual</h3>
			  <div class="recuadro">
	<?php
foreach ($listdatosproyectos as $rowproyecto) {
	?>
			 	  	<iframe width="500" height="250" src="<?php
$video = str_replace("watch?v=", "embed/", $rowproyecto->video);
	$video = str_replace("&feature=youtu.be", "", $video);

	echo $video?>" frameborder="0" allowfullscreen=""></iframe>
<?php
}
?>
			  </div>
		</div>
		<div id="preg" class="hidee">
		<div id="preguntas">
			 <?php
foreach ($listdatosproyectos as $rowproyecto) {

	echo utf8_decode($rowproyecto->preguntas);

}
?>
		</div>
		</div>
		<div id="cuad" class="hidee">
			<p class="titupper2">Cuadro de Acabados</p>
			<div id="preguntas">
			 <?php
foreach ($listdatosproyectos as $rowproyecto) {
	$acaba = utf8_decode($rowproyecto->acabados);
	echo $acaba;

}
?>
		</div>
		</div>
		<div id="plan" class="hidee">
			<div class="row">
				 <?php
foreach ($listartiposplanosareas as $rowplanosareas) {
	?>
				<div class="col-xs-5 col-lg-5 cajita">
					<a class="fancybox" rel="gallery1" href="../web/<?php echo $rowplanosareas->archivo ?>" title="<?php echo $rowplanosareas->categoria ?>">
					<img src="../web/<?php echo $rowplanosareas->varchivo; ?>" alt="<?php echo $rowplanosareas->categoria ?>" style="margin-bottom:15px;margin-left: 7%;margin-top: 5px;">
					<h4 align="center" style="color: rgba(213, 53, 0, 0.67);">MODELO <?php  echo $rowplanosareas->categoria; ?></h4>
					</a>
				</div>
				<div class="col-xs-1 col-lg-1"></div>
<?php }
?>
			</div>
		</div>
		<div id="area" class="hidee">
			<div class="row">
 <?php
foreach ($listarareasproy as $rowcomunes) {
	?>
				<div class="col-xs-6 col-lg-6">
					<a class="fancybox areas" rel="gallery2" href="../web/<?php echo $rowcomunes->archivo ?>" title="area">
					<img src="../web/<?php echo $rowcomunes->varchivo ?>" alt="areas" style="margin-bottom:15px;">
					</a>
				</div>
<?php }
?>
			</div>
		</div>
		<div id="avan" class="hidee">
			<div class="row">
			 <?php
foreach ($listaravancesproy as $rowavances) {
	?>
				<div class="col-xs-6 col-lg-6">
					<a class="fancybox avances" rel="gallery3" href="../web/<?php echo $rowavances->archivo ?>" title="avance">
					<img src="../web/<?php echo $rowavances->varchivo ?>" alt="avance" style="margin-bottom:15px;">
					</a>
				</div>
				<?php }
?>
			</div>
		</div>
		<div id="ubic" class="hidee respreg ">
			<div class="row">
				<div class="col-xs-12 col-lg-12">
					<div class="recuadro2">
					<?php foreach ($listarmapaubic as $rowmapa) {?>
						<a class="fancybox avances" style="width:100%;" rel="gallery4" href="../web/<?php echo $rowmapa->archivo ?>" class="img-responsive" title="mapa">
						<img src="../web/<?php echo $rowmapa->archivo ?>" alt="mapa" style="width: 100%;">
						</a>
					<?php }
	?>
					</div>
				</div>
				<div class="col-xs-12 col-lg-12 ">
				  	<h3 class="titupper2">Ubicación</h3>
      		<div class="descrippy"><?php
foreach ($listdatosproyectos as $rowproyecto) {
	echo utf8_decode($rowproyecto->ubicacion);
}
?></div>
				</div>
			</div>
		</div>
		<div id="info" class="hidee respreg">
			<p>Estamos para servirle toda información o consulta, por favor llene el formulario y a la brevedad estará
			siendo atendido</p>
			<div class="row">
				<div class="col-xs-10 col-lg-10 formc">
					<form class="form-horizontal" role="form" id="formcontac">
					  <div class="form-group">
					    <label for="" class="col-lg-4 control-label">Nombres y Apellidos:</label>
					    <div class="col-lg-7">
					      <input type="text" class="inputgrey" name="name" >
					    </div>*
					    <label for="contact-name"></label>
					  </div>
					  <div class="form-group">
					    <label for="contact-empre" class="col-lg-4 control-label">Empresa:</label>
					    <div class="col-lg-7">
					      <input type="text" class="inputgrey"  name="empre">
					    </div>*
					  </div>
					  <div class="form-group">
					    <label for="" class="col-lg-4 control-label">Teléfono / Celular:</label>
					    <div class="col-lg-7">
					      <input type="text" class="inputgrey"  name="telef">
					    </div>*
					    <label for="contact-telef"></label>
					  </div>
					  <div class="form-group">
					    <label for="" class="col-lg-4 control-label">Email:</label>
					    <div class="col-lg-7">
					      <input type="email" class="inputgrey"  name="email">
					    </div>*
					    <label for="contact-email"></label>
					  </div>
					  <div class="form-group">
					    <label for="contact-subject" class="col-lg-4 control-label">Asunto:</label>
					    <div class="col-lg-7">
					      <input type="text" class="inputgrey"  name="subject">
					    </div>*
					  </div>
					  <div class="form-group">
					    <label for="" class="col-lg-4 control-label">Mensaje:</label>
					    <div class="col-lg-7">
					      <textarea class="inputgrey" style="height:150px;resize:none;"  name="message"></textarea>
					    </div>*
					    <label for="contact-message"></label>
					  </div>
					  <div class="form-group">
					  <p class="error-label">*Datos Obligatorios</p>
					    <div class="col-lg-offset-3 col-lg-8">
					      <button type="submit" class="btn btn-default pull-right">Enviar</button>
					    </div>
					  </div>
					</form>
				</div>
			</div>
		</div>