<?php
require_once 'php/controller/web.controller.php';
$controller = new webController();
if (isset($_REQUEST['c'])) {
	$cat = $_REQUEST['c'];
	$listarproyect = call_user_func(array($controller, 'listarproyectxcat'), $_REQUEST['c']);
} else {
	$listarproyect = call_user_func(array($controller, 'listarproyect'));
}
if (@$_REQUEST['c'] == "") {
	$listarproyect = call_user_func(array($controller, 'listarproyect'));
}
if (is_numeric(@$_REQUEST['c'])) {
	$cat = $_REQUEST['c'];
	$listarproyect = call_user_func(array($controller, 'listarproyectxcat'), $_REQUEST['c']);
} else {
	$listarproyect = call_user_func(array($controller, 'listarproyect'));
}
if (@$_REQUEST['c'] > 0 and @$_REQUEST['c'] < 4) {
	$cat = $_REQUEST['c'];
	$listarproyect = call_user_func(array($controller, 'listarproyectxcat'), $_REQUEST['c']);
} else {
	$listarproyect = call_user_func(array($controller, 'listarproyect'));
}
?>
<div class="caja row">
<?php if (@$cat == 1) {
	echo '<h3 class="titupper">PROYECTOS PRE - VENTA</h3>';
} elseif (@$cat == 2) {
	echo '<h3 class="titupper">PROYECTOS TERMINADOS</h3>';
} elseif (@$cat == 3) {
	echo '<h3 class="titupper">PRÓXIMOS PROYECTOS</h3>';
} else {
	echo '<h3 class="titupper">TODOS LOS PROYECTOS</h3>';
}
?>

<?php ?>
          <?php
if (count($listarproyect) < 1) {
	echo "<div class='nohay'>No se encontraron resultados.</div>";
} else {
	foreach ($listarproyect as $row) {
		?>
          <div class="col-md-4 portfolio-item" style="text-align:center;">

                <a href="proyecto.php?id=<?php echo $row->idpro ?>">
                    <img width="240" height="268" src="../web/<?php echo $row->ruta ?>" alt="foto proyecto <?php echo $row->nombre ?>">
                </a>
                <a href="proyecto.php?id=<?php echo $row->idpro ?>">
                    <img style="margin:4px;margin-top:10px; width:145px;height:40px;" src="../web/<?php echo $row->logo ?>" alt="logo <?php echo $row->nombre ?>">
                </a>
                <p class="distrito"><?php echo $row->distrito ?></p>
                <p class="opciontip">
                <?php
if ($row->estado1 == 1) {
			echo "PRE - VENTA";
		} elseif ($row->estado1 == 2) {
			echo "TERMINADO";
		} elseif ($row->estado1 == 3) {
			echo "PRÓXIMO PROYECTO";
		}
		?></p>
          </div>
          <?php
}}
?>
</div>