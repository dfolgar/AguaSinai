<meta charset="utf-8">
<?php 
//include("config.php");
require_once"config.php";
function conexionMySQL()
{

//echo "Hola, porfavor no usen echo's para imprimir en pantalla";
	$conexion = new mysqli(SERVER, USER, PASS, DB);
	if($conexion->connect_error)
	{
		$error = "<div class='error'>";
			$error .= "Error de Conexión No. <b>".$conexion->connect_errno."</b> Mensaje del error: <mark>".$conexion->connect_error."</mark>";
		$error.= "</div>";	

		die($error);
	} 
	else
	{
		//$formato = "<div class='mensaje'>Conexión Exitosa: <b>".$conexion->host_info."</b></div>";
		//echo $formato;

		/*
		http://php.net/manual/es/function.printf.php
		Formatos de las funciones Printf
		http://php.net/manual/es/function.sprintf.php
		*/
	//	$formato = "<div class='mensaje'>Conexión Exitosa: <b>%s</b></div>";
//		printf($formato,$conexion->host_info);

	}
$conexion->query("SET CHARACTER SET UTF8");
return $conexion;
}

//conexionMySQL();
 ?>