<?php
class util {
	public function getConexion() {
		$cnx = new PDO("mysql:host=localhost;dbname=h1011221_gnovare", "h1011221_user2", "gn@123", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES  \"UTF8\""));
		return $cnx;
	}
}
?>