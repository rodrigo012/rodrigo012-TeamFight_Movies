<section class="container-fluid" > 
		<!--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
			<a class="navbar-brand" href="<?php echo base_url('');?>"><strong>Team Fight </strong></a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" 
			data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" 
			aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>


<!--Menu para administradores ---->

<?php if( ($this->session->userdata('logged_in')) and ($perfil_id == '1') ) { ?> 

			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    	<ul class="navbar-nav mr-auto">

			    	<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Productos
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?php echo base_url('ver_accion');?>">Accion</a>
				          <a class="dropdown-item" href="<?php echo base_url('ver_suspenso');?>">Suspenso</a>
				          <a class="dropdown-item" href="<?php echo base_url('ver_terror');?>">Terror</a>
				          <a class="dropdown-item" href="<?php echo base_url('ver_variados');?>">Variados</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="<?php echo base_url('productos_todos');?>">Todos los productos</a>
				        </div>
				    </li>
			    	
			    	<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Usuarios
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?php echo base_url('usuarios_todos');?>">Clientes</a>

				          
				        </div>
				    </li>

          			<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Funciones avanzadas
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				        	 <a class="dropdown-item" href="<?php echo base_url('catalogo-productos');?>">Ver Catalogo</a>
				          <a class="dropdown-item" href="<?php echo base_url('ventas');?>">Resumen de ventas</a>
				          <div class="dropdown-divider"></div>
				          <a class="dropdown-item" href="<?php echo base_url('ver_consultas');?>"> Ver Consultas</a>
				        </div>
				    </li>

			    </ul>	
			    
                     <li class="nav-item dropdown">
          <ul class="nav navbar-nav navbar-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bienvenido<span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>
                    </div>
          </ul>
        </li>
			</div>

<!-- Menu clientes -->

<?php } else if( ($this->session->userdata('logged_in')) and ($perfil_id == '2') ) { ?> 
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    	<ul class="navbar-nav mr-auto">

			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('catalogo-productos');?>">Catalogo</a>
			    	</li>

			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('Comercializacion');?>">Informaci&oacute;n Comercial</a>
			    	</li>
			    	
			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('contacto');?>">Consultas</a>
			    	</li>
			    </ul>	

			    
          		<ul class="nav navbar-nav navbar-right">
          			<li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Mis Compras
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" href="<?php echo base_url('carrito');?>">Ver carrito</a>

				        </div>
				    </li>

          			                             <li class="nav-item dropdown">
          <ul class="nav navbar-nav navbar-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bienvenido><span class="caret"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo base_url('logout');?>">Salir</a>
                    </div>
          </ul>
        </li>
			</div>

<!--Menu general-->
<?php } else { ?>
			  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		    	<ul class="navbar-nav mr-auto">

			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('catalogo-productos');?>">Catalogo</a>
			    	</li>

			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('Comercializacion');?>">Informaci&oacute;n Comercial</a>
			    	</li>
			    	
			    	<li class="nav-item">
			        	<a class="nav-link" href="<?php echo base_url('contacto');?>">Consultas</a>
			    	</li>
			    </ul>

			    <ul class="nav navbar-nav navbar-right">

			    <li class="nav-item dropdown">
				        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				          Mi Cuenta
				        </a>
				        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
				          <a class="dropdown-item" target= "_blank" href="<?php echo base_url('registrarse');?>">Registrarse</a>
				          <a class="dropdown-item" target= "_blank" href="<?php echo base_url('login');?>">Iniciar Sesi&oacute;n</a> 	          
				        </div>
				    </li>
				</ul>				
		</div>
<?php } ?> 
		</nav>
	</section>  