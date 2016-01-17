<div class="caja row">

	<div class="row">
		<div class="padempresa col-xs-12 col-lg-12" style="padding-left: 50px;padding-right: 10px;padding-bottom: 25px;">
			<p class="titupper2">UBÍQUENOS</p>
		 	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"  style="padding-left: 0px;">
				 <?php foreach ($listarubiquenos as $rowubic) {
	?>
	<img src="../web/<?php echo utf8_decode($rowubic->archivo); ?>" alt="mapa" class="img-responsive" style="width: 100%;padding-bottom: 25px;">
				 	<?php
}
?>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				<b>OFICINA GRUPO GNOVARE S.A.C.</b>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
				Calle Monterosa 128, Of. 20, Urb. Chacarilla del Estanque  - Santiago de Surco
			</div>
		</div>
	</div>

</div>