<div class="caja row">
<br>
	<div class="row">
		<div class="respreg col-xs-12 col-lg-12" style="padding-left: 50px;padding-right: 10px;padding-bottom: 25px;">
			<p class="titupper2">CONTÁCTENOS</p>
		 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-left: 0px;">
					<p>Estamos para servirle toda información o consulta, por favor llene el formulario y a la brevedad estará
				siendo atendido</p>
				<div class="row">
					<div class="col-xs-12 col-lg-12 formc">
						<form class="form-horizontal" role="form" id="formcontac">
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
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
								    </div>
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
								    </div>
								  </div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
								  <div class="form-group">
								    <label for="" class="col-lg-3 control-label">Mensaje:</label>
								    <div class="col-lg-8">
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
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="infodirs" >
                    <img src="../web/imagenes/direccion.png" />
                    <div class="imgnumcont" style="background-image:url(../web/imagenes/fijo.png);">
                   <?php
foreach ($listartel as $rowtele) {
	echo '<pre class="prelol">' . $rowtele->numero . '</pre>';
}
?>
                    </div>
                    <img src="../web/imagenes/email.png" />
                </div>
			</div>
		</div>
	</div>

</div>