<link rel="stylesheet" href="css/ordenes.css">
<?php 
	require_once"conexion.php";

	if(isset($_POST['search'])){
		$response = "<ul class='divVendedorOrden'><li class='nombreVendedor'>No se obtuvieron datos</li></ul>";

		$mysql=conexionMySQL();
		$q = $mysql->real_escape_string($_POST['q']);

		$sql = $mysql->query("SELECT id_vendedor, nombre_vendedor FROM vendedor WHERE nombre_vendedor LIKE '%$q%' OR id_vendedor LIKE '%$q%'");

		if ($sql->num_rows > 0){
			$response = "<ul class='divVendedorOrden'>";
				while($data = $sql->fetch_array()){
					$response.="<li class='nombreVendedor' id='".$data['id_vendedor']."'>".$data['nombre_vendedor']."</li>";

				}
			$response.= "</ul>";
		}

		exit($response);
	}
?>