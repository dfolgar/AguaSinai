<?php 
require "modeloVendedores.php";
require "vistasVendedores.php";
//require "vistasClientes.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="nuevoVendedor"){
		nuevoVendedor(
			$_POST["codigoVendedor"],
			$_POST["nombreVendedor"],
			$_POST["direccionVendedor"],
			$_POST["telefonoVendedor"],
			$_POST["comentarioVendedor"],
			$_POST["idInstitucion"]
			);
	}
	
	if ($transaccion =="misVendedores"){
		misVendedores(
			$_POST["idEmpresa"]
			);
	}

		if ($transaccion =="rutaHoy"){

		consultaVendedoresRuta(
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="verRutaHoy"){
		rutaHoy(
			$_POST["idEmpresa"],
			$_POST["fechaHoy"],
			$_POST["idVendedor"]
			
			);
	}
	
}

ejecutarTransaccion($transaccion);
?>