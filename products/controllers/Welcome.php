<?php
//controlador por defecto
class Welcome{

	public static function index(){

	    $products = Product::get();

		//carga la vista de portada;
		include '../../products/views/portada.php';
	}
}