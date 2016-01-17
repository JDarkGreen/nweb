<?php

require_once 'php/util/util.php';

class webModel {

	private $cn;

	function __construct() {
		$db_cone = new util();
		$this->cn = $db_cone->getConexion();

	}
	function listarproyect() {
		$res = $this->cn->prepare('call listarproyect');
		$res->execute();
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarsliderproyect($cod) {
		$res = $this->cn->prepare('call listarsliderproyect(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listdatosproyectos($cod) {
		$res = $this->cn->prepare('call listdatosproyectos(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listartiposplanosareas($cod) {
		$res = $this->cn->prepare('call listartiposplanosareas(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarareasproy($cod) {
		$res = $this->cn->prepare('call listarareasproy(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listaravancesproy($cod) {
		$res = $this->cn->prepare('call listaravancesproy(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarmapaubic($cod) {
		$res = $this->cn->prepare('call listarmapaubic(?)');
		$res->execute(array($cod));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarempresa() {
		$res = $this->cn->prepare('call listarempresa');
		$res->execute();
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarubiquenos() {
		$res = $this->cn->prepare('call listarubiquenos');
		$res->execute();
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listartel() {
		$res = $this->cn->prepare('call listartel');
		$res->execute();
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listarproyectxcat($cat) {
		$res = $this->cn->prepare('call listarproyectxcat(?)');
		$res->execute(array($cat));
		return $res->fetchAll(PDO::FETCH_OBJ);
	}
	function listslider() {
		$res = $this->cn->prepare('call listslider');
		$res->execute();
		return $res->fetchAll(PDO::FETCH_OBJ);
	}

}