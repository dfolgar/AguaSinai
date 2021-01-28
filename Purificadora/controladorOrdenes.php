<?php 
require "modeloOrdenes.php";
//require "vistasOrdenes.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="guardarOrden"){
		guardarOrden(
			$_POST["idEmpresa"],
			$_POST["fechaOrden"],
			$_POST["Cliente"],
			$_POST["Vendedor"],
			$_POST["totalOrden"],
			$_POST["matriz"]
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