<?php if (!$usuarios) { ?>

	<div class="container margen-sup">
		<div class="well">
			<h1>No hay Usuarios Eliminados</h1>
		</div>	
	</div>

<?php } else { ?>

	<div class="container margen-sup">
		<div class="well">
			<h1>Todos los Eliminados</h1>
		</div>	

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>ID_usuario</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Email</th>
					<th>Usuario</th>
					<th>Password</th>
					<th>Perfil Id</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row){ ?>
				<tr>
					<td><?php echo $row->id_usuario;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->password;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>
					<td><a href="<?php echo base_url("usuario_modifica/$row->id_usuario");?>">Modificar</a>|<a href="<?php echo base_url("usuario_activa/$row->id_usuario");?>">Activar</a></td>
				</tr>
				<?php } ?>
			</tbody>
		</table>	            
	</div>

<?php } ?>