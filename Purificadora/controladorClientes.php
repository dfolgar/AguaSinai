<?php 
require "modeloClientes.php";
require "vistasClientes.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
		if ($transaccion =="asignarGarrafon"){

		asignarGarrafon(
			$_POST["idCliente"],
			$_POST["estadoCheckbox"],
			$_POST["nGarrafones"]
			);
	}
	if ($transaccion =="asignarFrecuencia"){

		asignarFrecuencia(
			$_POST["idCliente"],
			$_POST["nFrecuencia"]
			);
	}
	if ($transaccion =="clientesVendedor"){

		consultaVendedores(
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="verClientesVendedor"){

		verClientesVendedor(
			$_POST["idVendedor"],
			$_POST["estadoCliente"],
			$_POST["idEmpresa"]
			);
	}


	if ($transaccion =="nuevoCliente"){

		insertarCliente(
			$_POST["codigoCliente"],
			$_POST["nombreCliente"],
			$_POST["NITCliente"],
			$_POST["direccionCliente"],
			$_POST["telefonoCliente"],
			$_POST["comentarioCliente"],
			$_POST["idInstitucion"],
			$_POST["estadoGarrafon"],
			$_POST["cantidadGarrafones"]
			
			);
	}

	if ($transaccion =="actualizarCliente"){

		actualizarCliente(
			$_POST["codigoClienteActualizar"],
			$_POST["nombreClienteActualizar"],
			$_POST["direccionClienteActualizar"],
			$_POST["NITClienteActualizar"],
			$_POST["telefonoClienteActualizar"],
			$_POST["comentarioClienteActualizar"],
			$_POST["idInstitucion"]
			);
	}


	

	if ($transaccion =="misClientes"){
		misClientes(
			$_POST["idEmpresa"]
			);
	}
	
	if ($transaccion =="clientesGarrafon"){

		clientesGarrafon(
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="asignarVendedor"){

		asignarVendedor(
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="clienteCxC"){

		clienteCxC(
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="actualizarAsignarVendedorCliente"){

		actualizarAsignarVendedorCliente(
			$_POST["idCliente"],
			$_POST["idVendedor"],
			$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="verCxCcliente"){

		verCxCcliente(
			$_POST["idCliente"],
			$_POST["idEmpresa"]
			);
	}
	
	if ($transaccion =="ultimoIdCliente"){

		ultimoIdCliente(
				$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="clientesSinFrecuencia"){

		clientesSinFrecuencia(
				$_POST["idEmpresa"]
			);
	}
	if ($transaccion =="actualizarEstadoCliente"){

		actualizarEstadoCliente(
				$_POST["idCliente"],
				$_POST["estadoActivo"],
				$_POST["idEmpresa"]
			);
	}

}

ejecutarTransaccion($transaccion);
?>