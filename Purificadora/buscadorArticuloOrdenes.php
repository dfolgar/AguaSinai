<link rel="stylesheet" href="css/ordenes.css">
<?php 
	require_once"conexion.php";

	if(isset($_POST['search'])){
		$response = "<ul class='divArticuloOrden'><li class='nombreArticulo'>No se obtuvieron datos</li></ul>";

		$mysql=conexionMySQL();
		$q = $mysql->real_escape_string($_POST['q']);
//nombre_cliente LIKE '%".$search."%' OR id_cliente LIKE '%".$search."%'";

		$sql = $mysql->query("SELECT id_articulo, nombre_articulo, precioVenta_articulo FROM articulo WHERE nombre_articulo LIKE '%$q%' OR id_articulo LIKE '%$q%'");

		if ($sql->num_rows > 0){
			$response = "<ul class='divArticuloOrden'>";
				while($data = $sql->fetch_array()){
					$response.="<li class='nombreArticulo' title='".$data['precioVenta_articulo']."' id='".$data['id_articulo']."'>".$data['nombre_articulo']."</li>";

				}
			$response.= "</ul>";
		}

		exit($response);
	}
?>