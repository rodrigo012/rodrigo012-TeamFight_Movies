

<?php if (!$consultas) { ?>
<section class="container">
	<div class="container margen-sup">
		<div class="well">
			<h1>No hay Consultas</h1>
		</div>
		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			
			<br> <br>
		<?php } ?>	
	</div>

<?php } else { ?>

	<div class="container margen-sup">
		<div class="well">
			<div class="a">
			<h1>Consultas</h1>
		</div>
		</div>	

		<br> <br>

			<div class="table-responsive-sm">
				<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
				
					<thead>
						<tr>
							<th>ID</th>
							<th>Consulta</th>
							<th>Nombre</th>
							<th>email</th>
							<th>Opciones</th>

						</tr>
					</thead>

					<tbody>
						<?php foreach($consultas->result() as $row) { ?>	
							<tr>
							<td><?php echo $row->id_consulta;  ?></td>
							<td><?php echo $row->consulta;  ?></td>
							<td><?php echo $row->nombre;  ?></td>
							<td><?php echo $row->email;  ?></td>
							<td><a href="<?php echo base_url("borrar_consulta/$row->id_consulta");?>">Eliminar</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
</div>
</section>
<?php } ?>