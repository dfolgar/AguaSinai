<?php 
require "vistasIndex.php";


$transaccion = $_POST["transaccion"]; 


function ejecutarTransaccion($transaccion)
{
	if($transaccion=="encontrarUsuario"){
		
		consultaUsuario(
			$_POST["usuario"],
			$_POST["password"]
			);

			
	}
}

ejecutarTransaccion($transaccion);
?>