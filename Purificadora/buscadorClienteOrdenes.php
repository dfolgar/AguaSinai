<link rel="stylesheet" href="css/ordenes.css">
<?php 
	require_once"conexion.php";

	if(isset($_POST['search'])){
		$response = "<ul class='divNombre'><li class='nombreCliente'>No se obtuvieron datos</li></ul>";

		$mysql=conexionMySQL();
		$q = $mysql->real_escape_string($_POST['q']);
//nombre_cliente LIKE '%".$search."%' OR id_cliente LIKE '%".$search."%'";

		$sql = $mysql->query("SELECT id_cliente, nombre_cliente FROM cliente WHERE estadoActivo_cliente='1' AND (nombre_cliente LIKE '%$q%' OR id_cliente LIKE '%$q%')");

		if ($sql->num_rows > 0){
			$response = "<ul class='divNombre'>";
				while($data = $sql->fetch_array()){
					$response.="<li class='nombreCliente' id='".$data['id_cliente']."'>".$data['nombre_cliente']."</li>";

				}
			$response.= "</ul>";
		}

		exit($response);
	}
?>