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
<div class="container-fluid">
<div class="body">
<body>
<?php if (!$usuarios) { ?>

	<div class="container margen-sup">
		<div class="well">
			<h1>No hay Usuarios</h1>
		</div>

		<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?>
			
			<a type="button" class="btn btn-danger" href="<?php echo base_url('usuarios_eliminados'); ?>">ELIMINADOS</a>

			<br> <br>
		
		<?php } ?>
	</div>

<?php } else { ?>
	<div class="container margen-sup">
		<div class="well">
			<div class="a">
			<center><h1>Usuarios</h1></center>
		</div>
			<center><img class="d-block w-100" src="assets/img/logo.png"  width="800" height="500"></img></center>
		</div>
		<br><br>
		<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4">
					<a type="button" class="btn btn-success" href="<?php echo base_url('agrega_usuario'); ?>">AGREGAR</a>
					<a type="button" class="btn btn-danger" href="<?php echo base_url('usuario_eliminados'); ?>">ELIMINADOS</a>         				
				</div>   
			</div>
		</div>	

<div class="container">
		<br><br>
			<div class="table-responsive-sm" id="texto">
			<table id="tabla-dinamica" class="table table-bordered table-hover table-light table-striped text-center">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Usuario</th>
					<th>email</th>
					<th>Categoria</th>
					<th>Eliminado</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($usuarios->result() as $row) { ?>	
					<tr>
					<td><?php echo $row->id_usuario;  ?></td>
					<td><?php echo $row->nombre;  ?></td>
					<td><?php echo $row->apellido;  ?></td>
					<td><?php echo $row->usuario;  ?></td>
					<td><?php echo $row->email;  ?></td>
					<td><?php echo $row->perfil_id;  ?></td>
					<td><?php echo $row->baja;  ?></td>
					
					<td style="color: white"><a href="<?php echo base_url("usuario_modifica/$row->id_usuario");?>" style="color: green">Modificar</a>
						<?php
							if (($id_usuario != $row->id_usuario) and ($row->baja =="NO" ) ){?>
								|<a href="<?php echo base_url("usuario_eliminar/$row->id_usuario");?>" style="color: red">Eliminar</a>
						<?php } ?>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
		</div>
		<?php }?>

</body>
</div>
</div>