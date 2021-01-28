<?php 
require "modeloEgresoProveedores.php";
require "vistasEgresoProveedores.php";
//require "vistasClientes.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="nuevoGasto"){
		nuevoGasto(
			$_POST["codigoGasto"],
			$_POST["nombreGasto"],
			$_POST["observacionGasto"],
			$_POST["idInstitucion"]
			);
	}
	
	if ($transaccion =="nuevoProveedor"){
		nuevoProveedor(
			$_POST["codigoProveedor"],
			$_POST["nombreProveedor"],
			$_POST["direccionProveedor"],
			$_POST["NITProveedor"],
			$_POST["telefono1Proveedor"],
			$_POST["telefono2Proveedor"],
			$_POST["observacionProveedor"],
			$_POST["idInstitucion"]
			);
	}
	if ($transaccion =="nuevoEgreso"){
		nuevoEgreso(
			
			$_POST["codigoEgreso"],
			$_POST["fechaEgreso"],
			$_POST["facturaEgreso"],
			$_POST["totalEgreso"],
			$_POST["idProveedor"],
			$_POST["idGasto"],
			$_POST["tipoEgreso"],
			$_POST["idInstitucion"]
			);
	}

	if ($transaccion =="ultimoIdGasto"){

		ultimoIdGasto(
				$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="ultimoIdProveedor"){

		ultimoIdProveedor(
				$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="ultimoIdEgreso"){

		ultimoIdEgreso(
				$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="reporteEgresos"){
		reporteEgresos(
			
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="reporteEgresosGasto"){
		reporteEgresoGasto(
			
			$_POST["idEmpresa"],
			$_POST["tipoGasto"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}
	if ($transaccion =="reporteEgresosProveedor"){
		reporteEgresoProveedor(
			
			$_POST["idEmpresa"],
			$_POST["tipoProveedor"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}
	
}

ejecutarTransaccion($transaccion);
?>