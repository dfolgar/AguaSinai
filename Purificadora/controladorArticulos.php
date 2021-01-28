<?php 
require "modeloArticulos.php";
require "vistasArticulos.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="nuevoArticulo"){
		nuevoArticulo(
			$_POST["codigoArticulo"],
			$_POST["nombreArticulo"],
			$_POST["observacionArticulo"],
			$_POST["costoArticulo"],
			$_POST["precioVentaArticulo"],
			$_POST["idInstitucion"]
			);
	}
	
	if ($transaccion =="misArticulos"){
		misArticulos(
			$_POST["idEmpresa"]
			);
	}
	
}

ejecutarTransaccion($transaccion);
?>