<?php 
require "vistasInicio.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if($transaccion=="perfilEstudiante"){
		
		perfilEstudiante(
			$_POST["idEstudiante"]
			//$_POST["fechaInicial"],
			//$_POST["fechaFinal"]
			);
	}
	if ($transaccion =="calificacionesEstudiante"){
		calificacionesEstudiante(
			$_POST["idEstudiante"]
			);
	}
}

ejecutarTransaccion($transaccion);
?>