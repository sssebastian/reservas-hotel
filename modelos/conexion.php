<?php

Class Conexion {

	static public function conectar(){

		$link = new PDO("mysql:host=localhost:3306;dbname=reservas-hotel","root","");
		$link->exec("set names utf8");
		return $link;
	}
}