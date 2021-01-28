<link rel="stylesheet" href="css/ordenes.css">
<?php 
	require_once"conexion.php";

	if(isset($_POST['search'])){
		$response = "<ul class='divNombre'><li class='nombreCliente'>No se obtuvieron datos</li></ul>";

		$mysql=conexionMySQL();
		$q = $mysql->real_escape_string($_POST['q']);
//nombre_cliente LIKE '%".$search."%' OR id_cliente LIKE '%".$search."%'";

		$sql = $mysql->query("SELECT id_gasto, descripcion_gasto FROM gasto WHERE descripcion_gasto LIKE '%$q%' OR id_gasto LIKE '%$q%'");

		if ($sql->num_rows > 0){
			$response = "<ul class='divGasto'>";
				while($data = $sql->fetch_array()){
					$response.="<li class='nombreGasto' id='".$data['id_gasto']."'>".$data['descripcion_gasto']."</li>";

				}
			$response.= "</ul>";
		}

		exit($response);
	}
?>