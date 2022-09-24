<div class="margen-sup container">
<div class="col-sm-10 col-md-10">
	<div class="well">
		<h1>Modificar Datos de Usuarios</h1>
	</div>	            

	<?php echo form_open_multipart("verifico_modificausuario2/$id_usuario", ['class' => 'form-signin', 'role' => 'form']); ?>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Nombre:', 'nombre'); ?>
					<?php echo form_input(['name' => 'nombre', 
													'id' => 'nombre', 
													'class' => 'form-control',
													'placeholder' => 'Nombre', 
													'autofocus'=>'autofocus',
													'value'=>"$nombre"]); ?>
					<?php echo form_error('nombre'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Apellido:', 'apellido'); ?>	
					<?php echo form_input(['name' => 'apellido', 
													'id' => 'apellido', 
													'class' => 'form-control',
													'placeholder' => 'Apellido', 
													'value'=>"$apellido"]); ?>
					<?php echo form_error('apellido'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Email:', 'email'); ?>
					<?php echo form_input(['name' => 'email', 
													'id' => 'email', 
													'class' => 'form-control',
													'placeholder' => 'Email', 
													'value'=>"$email"]); ?>
					<?php echo form_error('email'); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Usuario:', 'usuario'); ?>
					<?php echo form_input(['name' => 'usuario', 
													'id' => 'usuario', 
													'class' => 'form-control',
													'placeholder' => 'Usuario',
													'value'=>"$usuario"]); ?>
					<?php echo form_error('usuario'); ?>
				</div>
			</div>
		</div>
		<div class="row">
	   		<div class="col-md-6">
				<div class="form-group">
					<?php echo form_label('Password:', 'password'); ?>
					<?php echo form_input(['name' => 'password', 
													'id' => 'password', 
													'class' => 'form-control',
													'placeholder' => 'Password',
													'value'=>"$password"]); ?>
					<?php echo form_error('password'); ?>
				</div>
			</div>
		</div>

		<div class="col-lg-3 col-lg-offset-5">
						<?php echo form_submit('submit', 'Modificar',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
						
					</div>

	<?php echo form_close(); ?>
</div>
</div>