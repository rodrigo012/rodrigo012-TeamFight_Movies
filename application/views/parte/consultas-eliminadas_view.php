
	<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
	<div class="container">
		<div class="row">
        	<div class="col">
         	 	<h1 id="texto" class="text-center mt-4 text-uppercase font-weight-bold font-italic">Consultas Archivadas</h1>
        	</div>
      	</div>
	</div>

		<div class="container-fluid">
			<div class="row">
				<div class="col-md-10"></div>
				
				<div class="col-md-2">
					<a type="button" class="btn btn-danger" href="<?php echo base_url('ver_consultas'); ?>">Volver</a>
				</div>
			</div>   
		</div>

	<?php if (!$consultas) { ?>
		<section class="container" id="texto">
			<h2 class="text-center mt-4 text-uppercase font-weight-bold font-italic">No hay consultas archivadas</h2>
		</section>

	<?php } else { ?>
		<section class="container">         

			<br><br>
			<br><br>
				<div class="table-responsive-sm" id="texto">
				<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Telefono</th>
						<th>email</th>
						<th>Asunto</th>
						<th>Mensaje</th>
						<th>Restaurar</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($consultas->result() as $row) { ?>	
						<tr>
						<td><?php echo $row->id_mensaje;  ?></td>
						<td><?php echo $row->nombre;  ?></td>
						<td><?php echo $row->apellido;  ?></td>
						<td><?php echo $row->telefono;  ?></td>
						<td><?php echo $row->email;  ?></td>
						<td><?php echo $row->asunto;  ?></td>
						<td><?php echo $row->mensaje;  ?></td>
						<td>
							<a  class="text-white bg-secondary text-decoration-none font-weight-bold "href="<?php echo base_url("restaurar_consulta/$row->id_mensaje");?>">Restaurar</a></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>	            
		</section>
		<?php } ?>
			
	<?php } ?>

	<br><br>
	<br><br>
	<br><br>
	<br><br>
	<br><br>