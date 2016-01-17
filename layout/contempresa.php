<div class="caja row">
<br>
	<div class="row">
		<div class="padempresa col-xs-8 col-lg-8" style="padding-left: 50px;padding-right: 10px;">
			<p class="titupper2">EMPRESA</p>
	 	<div class="respreg">
	 <?php foreach ($listarempresa as $rowempresa) {
	echo utf8_decode($rowempresa->empresa);
	?>
		</div>
		</div>
		<div class="padempresa col-xs-4 col-lg-4">
			<img src="source/images/familia1.jpg" style="padding-right: 50px;width:280px;" class="pull-right" alt="empresa">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 nube">
				<p class="nbtitle">Misión</p>
				<p class="textp">
					<?php echo utf8_decode($rowempresa->mision); ?>
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 nube">
				<p class="nbtitle">Visión</p>
				<p class="textp">
					<?php echo utf8_decode($rowempresa->vision); ?>
				</p>
			</div>
			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 nube">
				<p class="nbtitle">Valores</p>
				<p class="textp">
					<?php echo utf8_decode($rowempresa->valores); ?>
				</p>
			</div>
		</div>
		<?php }
?>
	</div>

</div>