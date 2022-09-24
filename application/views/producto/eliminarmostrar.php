
 <style>
           div {
  background-image: url("assets/img/Fondo1.jpeg");
    background-repeat: repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
body{

  background-image: url("assets/img/Fondo1.jpeg");
    background-repeat: repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
    color:black;
opacity: 0.9;
text-shadow: gray 1px 2px;
size: 90px;

}

</style>

<?php if (!$producto) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Eliminados</h1>
			<br><br>
			<center><a type="button" class="btn btn-danger" href="<?php echo base_url('productos_todos'); ?>">VER ACTIVOS</a></center>
		</div>	
	</div>

<?php } else { ?>

	<div class="container">
		<div class="well">
			<h1>Productos Eliminados</h1>
			<div class="row">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_todos'); ?>">VER ACTIVOS</a>
				</div>
			</div>   
		</div>	
	<div class="container">	
		<br>
		<br>
			<div class="table-responsive-sm" id="texto">
			<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($producto->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->Descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td><?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
					<td>
						<a href="<?php echo base_url("productos_modifica/$row->id");?>" style="color: green">Modificar</a>|<a href="<?php echo base_url("productos_activa/$row->id");?>">Activar</a>
					</td>				
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>	            
	</div>


<?php } ?>