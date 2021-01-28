<link rel="stylesheet" href="css/estilosBuscadorInicio.css">
<?php 
	require_once"conexion.php";
	sleep(0.1);

	$search='';
	if(isset($_POST['search'])){
		$search=$_POST['search'];
	}

	$mysql=conexionMySQL();
	
	$select="SELECT cliente.id_cliente, cliente.nombre_cliente ,cliente.NIT_cliente, cliente.direccion_cliente, cliente.telefono_cliente, cliente.comentarios_cliente, cliente.frecuencia_cliente, cliente.cantidadGarrafones_cliente, vendedor.nombre_vendedor 
		FROM cliente 
		INNER JOIN vendedor ON cliente.id_vendedor = vendedor.id_vendedor
		WHERE cliente.id_cliente LIKE '%".$search."%'
		 OR cliente.nombre_cliente LIKE  '%".$search."%' AND cliente.id_empresa='1' 
		 ORDER BY nombre_cliente
		 ";
	$resultado = $mysql->query($select);
	$fila=mysqli_fetch_assoc($resultado);
	$total=mysqli_num_rows($resultado);
 ?>
 <?php if ($total>0 && $search!=""){  ?>
	<div class='lineaColorBusca'></div>
	<div id='buscadorView' class='contBusc' data-buscadorView>
		
		<h2 class="tituloBusc">Resultado de la busqueda</h2>

		<div class="tablaContenidoCliente">
			<table class="tablaRW" id="tablaBuscadorCliente">
						<thead>
							<tr>
								<th>Id</th>
								<th>Nombre</th>
								<th>Dirección</th>
								<th>Comentarios</th>
								<th>Teléfono</th>
								<th>NIT</th>
								<th>Frecuencia</th>
								<th>Garrafones</th>
								<th>Vendedor</th>
								<th></th>
								
							</tr>
						</thead>
				<?php do{ ?>
					<tbody class='<?php echo $fila['id_cliente'] ?>' id='<?php echo $fila['frecuencia_cliente'] ?>' title='<?php echo $fila['cantidadGarrafones_cliente'] ?>'>
						<tr id="elementosTR" class='<?php echo $fila['id_cliente'] ?>'>
							<td title="Código"><?php echo $fila['id_cliente'] ?></td>
							<td title="Nombre Cliente"><?php echo $fila['nombre_cliente'] ?></td>
							<td title="Dirección"><?php echo$fila['direccion_cliente'] ?></td>
							<td title="Comentarios"><?php echo $fila['comentarios_cliente'] ?></td>
							<td title="Teléfono"><?php echo $fila['telefono_cliente'] ?></td>
							<td title="NIT"><?php echo $fila['NIT_cliente'] ?></td>
							<td title="Frecuencia"><?php echo $fila['frecuencia_cliente'] ?></td>
							<td title="Frecuencia"><?php echo $fila['cantidadGarrafones_cliente'] ?></td>
							<td title="Frecuencia"><?php echo $fila['nombre_vendedor'] ?></td>
							<td class="iconosBuscador botonOpcion" id="botonOpcion" title="Opciones">
								<ul class="iconOpcion"></ul>
								<ul class="iconOpcion"></ul>
								<ul class="iconOpcion"></ul>	
							</td>
						
						</tr>
					</tbody>		
				<?php } while ($fila=mysqli_fetch_assoc($resultado)); ?>
			</table> 
		</div>
	</div>
	
<?php }

/*
class Ajax{
	public $buscador;

	public function Buscar($a){
		$mysql=conexionMySQL();

		$this->buscador = $mysql->real_escape_string($a);
			$select="SELECT * FROM cliente WHERE nombre_cliente LIKE '%".$this->buscador."%'";
			$sql=$db->query($select);

			while($array = $db->recorrer($sql)){
				$resultado[]=$array['nombre_cliente'];

			}
			return $resultado;
	}

}
$busqueda = new Ajax();
echo json_encode($busqueda->Buscar($_GET['term']));
*/
 ?>

