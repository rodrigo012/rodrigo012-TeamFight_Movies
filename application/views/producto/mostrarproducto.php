
<section class="container">
		<div class="a">
	<?php if (!$producto) { ?>

	<div class="container">
		<div class="well">
			<h1>No hay Productos</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			<a type="button" class="btn btn-success" href="<?php echo base_url('Agregarproducto'); ?>">Agregar</a>
			<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">ELIMINADOS</a>
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

<div class="table">
	<div class="container">
		<div class="well">
			<h1>Todos los Productos</h1>
		</div>
		<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<a type="button" class="btn btn-success" href="<?php echo base_url('Agregarproducto'); ?>">AGREGAR PRODUCTO</a>
					<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">VER ELIMINADOS</a>
				</div>   
			</div>
		</div>	
		<br><br>

<div class="container">	
		<div class="table-responsive-xl-md-sm-xs" id="texto">
			<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>ID Categoria</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($producto->result() as $row)
				{ 
					$imagen = $row->imagen; ?>

					<tr>	
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->Descripcion;  ?></td>
					<td><?php echo $row->categoria_id;  ?></td>
					<td>$<?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
				    <td><img height="50px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td>
						<a href="<?php echo base_url("productos_modifica/$row->id");?>"style="color: green">Modificar</a>|<a href="<?php echo base_url("productos_elimina/$row->id");?>"style="color: red">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>	            
	</div>

	<?php } ?>

				</div>
</section>
