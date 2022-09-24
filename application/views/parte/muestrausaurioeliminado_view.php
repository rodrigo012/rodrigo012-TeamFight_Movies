
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

<?php if (!$usuarios) { ?>
	<div class="container margen-sup">
	<h1>No hay Usuarios Eliminados</h1>	
	<br><br>
	<center><a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_todos'); ?>">VER ACTIVOS</a></center>
		</div>		

<?php } else { ?>

	<div class="container margen-sup">
			<h1>Todos los Eliminados</h1>	
			<div class="row">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_todos'); ?>">VER ACTIVOS</a>
				</div>
			</div>   
		</div>		

	<div class="container">
		<br><br>
			<div class="table-responsive-sm" id="texto">
			<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>email</th>
					<th>Categoria</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row) { ?>	
					<tr>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>
					<td>
					<a href="<?php echo base_url("usuario_modifica/$row->id_usuario");?>">Modificar</a>|<a href="<?php echo base_url("usuario_activa/$row->id_usuario");?>">Activar</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
	<?php } ?>	