<link rel="stylesheet" href="css/ordenes.css">
<?php 
	require_once"conexion.php";

	if(isset($_POST['search'])){
		$response = "<ul class='divNombre'><li class='nombreCliente'>No se obtuvieron datos</li></ul>";

		$mysql=conexionMySQL();
		$q = $mysql->real_escape_string($_POST['q']);
//nombre_cliente LIKE '%".$search."%' OR id_cliente LIKE '%".$search."%'";

		$sql = $mysql->query("(SELECT id_proveedor, nombre_proveedor FROM proveedor WHERE id_proveedor LIKE '%$q%' OR nombre_proveedor LIKE '%$q%' ORDER BY nombre_proveedor) UNION (SELECT id_deudor, nombre_deudor FROM deudores WHERE id_deudor LIKE '%$q%' OR nombre_deudor LIKE '%$q%' ORDER BY nombre_deudor)");
		//$sql = $mysql->query("SELECT id_proveedor, nombre_proveedor FROM proveedor WHERE nombre_proveedor LIKE '%$q%' OR id_proveedor LIKE '%$q%'");

		if ($sql->num_rows > 0){
			$response = "<ul class='divProveedor'>";
				while($data = $sql->fetch_array()){
					$response.="<li class='nombreProveedor' id='".$data['id_proveedor']."'>".$data['nombre_proveedor']."</li>";

				}
			$response.= "</ul>";
		}

		exit($response);
	}
?>