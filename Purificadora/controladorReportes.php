<?php 

require "vistasReportes.php";
require "modeloCierres.php";
require "modeloCXC.php";

$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if ($transaccion =="ventasPorDia"){
		consultaVendedoresRuta(
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="verVentasPorDia"){
		verVentasPorDia(
			$_POST["idVendedor"],
			$_POST["fechaVenta"],
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="cuentaXcobrar"){
		consultaCuentaXcobrar(
			$_POST["idEmpresa"]
			
			);
	}
	
	if ($transaccion =="verCxC"){
		verCxC(
			$_POST["idVendedor"],
			$_POST["fechaVenta"],
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="recuperado"){
		recuperado(
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="verRecuperado"){
		verRecuperado(
			$_POST["idVendedor"],
			$_POST["fechaVenta"],
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="reporteCierre"){
		reporteCierre(
			
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="crearCierre"){
		crearCierreVentas(
			
			$_POST["idEmpresa"],
			$_POST["idVendedor"],
			$_POST["fechaCierre"],
			$_POST["totalCierre"],
			$_POST["totalGarrafones"],
			$_POST["clientesAtendidos"],
			$_POST["tipoCierre"]
			);
	}
	if ($transaccion =="verificarCXC"){
		verificarCXC(
			$_POST["idEmpresa"],
			$_POST["idVendedor"],
			$_POST["idOrden"],
			$_POST["idCliente"]
			);
	}
	if ($transaccion =="crearCXC"){
		crearCXC(
			$_POST["idEmpresa"],
			$_POST["idVendedor"],
			$_POST["idOrden"],
			$_POST["idCliente"],
			$_POST["fechaCXC"],
			$_POST["Garrafones"],
			$_POST["TotalCXC"]
			);
	}
	if ($transaccion =="crearRecuperado"){
		crearRecuperado(
			$_POST["idEmpresa"],
			$_POST["idVendedor"],
			$_POST["idCxC"],
			$_POST["idCliente"],
			$_POST["fechaRecuperado"],
			$_POST["Garrafones"],
			$_POST["TotalRecuperado"],
			$_POST["garraRecuperado"]
			);
	}

	if ($transaccion =="reporteTipoDetallado"){
		reporteTipoDetallado(
			
			$_POST["idEmpresa"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}
	if ($transaccion =="reporteTipoCierre"){
		reporteTipoCierre(
			
			$_POST["idEmpresa"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}
	if ($transaccion =="reporteCxCGeneral"){
		reporteCxCGeneral(
			
			$_POST["idEmpresa"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			
			);
	}
	if ($transaccion =="reporteCxCclienteVendedor"){
		reporteCxCclienteVendedor(
			
			$_POST["idEmpresa"]
			
			);
	}
	if ($transaccion =="reporteConsolidado"){
		reporteConsolidado(
			
			$_POST["idEmpresa"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}

	if ($transaccion =="reporteConsolidadoGeneral"){
		reporteConsolidadoGeneral(
			
			$_POST["idEmpresa"],
			$_POST["fechaUltima"],
			$_POST["fechaInicial"]
			);
	}
}

ejecutarTransaccion($transaccion);
?>