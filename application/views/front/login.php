
<section class="container">
<body>


<div class="container d-flex justify-content-center">
	<!--div class="row"-->
		
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="a">
			<center><h1 class="text-center login-title" style="color: darkred"><br>Iniciar sesión <br>para continuar</h1></center>
		</div>
			<center><img class="d-block w-100" src="assets/img/logo.png" ></img></center>
			
			<?php echo validation_errors(); ?>
			
			<!-- Genera un formulario para loguearse -->
			<center><div class="form-group">
            	<div class="col-sm-10">
							<?php echo form_open('verifico_usuario', ['class' => 'form-signin', 'role' => 'form']); ?> <br>
							
							<?php echo form_input(['name' => 'usuario', 
													'id' => 'usuario', 
													'class' => 'form-control',
													'placeholder' => 'Usuario', 
													'required'=>'required', 
													'autofocus'=>'autofocus']); ?>
							
							<?php echo form_input(['type' => 'password',
													'name' => 'password', 
													'id' => 'password', 
													'class' => 'form-control',
													'placeholder' => 'Contraseña', 
													'required'=>'required']); ?> <br>
							
							<?php echo form_submit('submit', 'Iniciar sesión',"class='btn btn-lg btn-primary btn-block'"); ?> <br>
							
							<?php echo form_close(); ?>
				<br>
				</div>
			</div></center>
		</div>
	<!--/div-->
</div>
</body>
</div>
</section>