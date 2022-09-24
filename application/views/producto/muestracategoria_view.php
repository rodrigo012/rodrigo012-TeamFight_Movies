
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>

	<div class="container">
		<div class="row">
        	<div class="col">
         	 	<h1 id="texto" class="text-center mt-4 text-uppercase font-weight-bold font-italic">
         	 		Productos Por Categoria
         	 	</h1>
        	</div>
      	</div>
	</div>

	<br><br>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9"></div>
				
				<div class="col-md-3">
					<a type="button" class="btn btn-success" href="<?php echo base_url('Agregarproducto'); ?>">Agregar</a>
					<a type="button" class="btn btn-danger" href="<?php echo base_url('productos_eliminados'); ?>">Ver Elminados</a>
				</div>
			</div>   
		</div>	


	<?php if (!$productos) { ?>

		<section class="container" id="texto">
			<h2 class="text-center mt-4 text-uppercase font-weight-bold font-italic">Esta categoria no tiene productos cargados.</h2>
		</section>

<?php } else { ?>

	<br><br>
	<br><br>
	<div class="container">
			<div class="table-responsive-sm" id="texto">
			<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Precio Venta</th>
					<th>Stock</th>
					<th>Imagen</th>
					<th>Eliminado</th>
					<th>Modificar</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($productos->result() as $row)
				{ 
					$imagen = $row->imagen;	?>
					<tr>
					<td><?php echo $row->id;  ?></td>
					<td><?php echo $row->Descripcion;  ?></td>
					<td>$<?php echo $row->precio_venta;  ?></td>
					<td><?php echo $row->stock;  ?></td>
				    <td><img height="50px" src="<?php echo $imagen; ?>"/></td>
					<td><?php echo $row->eliminado;  ?></td>
					<td>
						<a class="text-white bg-secondary text-decoration-none font-weight-bold " href="<?php echo base_url("productos_modifica/$row->id");?>">Modificar</a>

						<a class="text-white bg-danger text-decoration-none font-weight-bold " href="<?php echo base_url("productos_elimina/$row->id");?>">Eliminar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
		</div>	            
	</div>

	<?php } ?>
	<?php } ?>
	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>