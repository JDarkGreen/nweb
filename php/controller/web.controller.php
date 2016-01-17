<?php

require_once 'php/model/web.model.php';

class webController {
	private $model;

	function __construct() {
		$this->model = new webModel();
	}
	function listarproyect() {
		return $this->model->listarproyect();
	}
	function listarsliderproyect($cod) {
		return $this->model->listarsliderproyect($cod);
	}
	function listdatosproyectos($cod) {
		return $this->model->listdatosproyectos($cod);
	}
	function listartiposplanosareas($cod) {
		return $this->model->listartiposplanosareas($cod);
	}
	function listarareasproy($cod) {
		return $this->model->listarareasproy($cod);
	}
	function listaravancesproy($cod) {
		return $this->model->listaravancesproy($cod);
	}
	function listarmapaubic($cod) {
		return $this->model->listarmapaubic($cod);
	}
	function listarempresa() {
		return $this->model->listarempresa();
	}
	function listarubiquenos() {
		return $this->model->listarubiquenos();
	}
	function listartel() {
		return $this->model->listartel();
	}
	function listarproyectxcat($cat) {
		return $this->model->listarproyectxcat($cat);
	}
	function listslider() {
		return $this->model->listslider();
	}
}
