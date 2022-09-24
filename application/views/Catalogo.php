<?php if (!$productos) { ?>

    <section class="container">
      <div class="row">
        <div class="col">
          <h1 id="texto" class="text-center mt-4 text-uppercase font-weight-bold font-italic">No hay productos</h1>
        </div>
      </div>

<?php } else { ?>

<div class="container">
	 <h1 id="texto" class="text-center mt-4 text-uppercase font-weight-bold font-italic">Cat&aacute;logo de Productos</h1>	

	<br>
	<br><br>
	<div class="row text-center">
				       <h3 id="texto" class="font-weight-bold text-center">¿Que Pelicula Desea Ver?</h3>
    <br>
    <div class="row">
        <div class="col-md-6">
            <div class="jumbotron bg-light">
                <div class="container">
                  <img src="<?php echo base_url('assets/img/action.png');?>" data-interval="3000" width="200px" height="150px">
                   <h1 class="text-center font-weight-bold">Accion</h1>
                  <p class="lead">
                    <b>
                        Peliculas con persecuciones, tiroteos, enfrentamientos, artes marciales y luchas callejeras, armas, explosiones, agresiones y cualquier situación violenta o intensa dando todo la adrelanina constante en un solo lugar.
                    <br>
                    <br>
                    <br>
                    <br>
                    </b>
                    <a target= "_blank" href="<?php echo base_url('Accion');?>" style="color:silver;">Ir a Accion</a>
                  </p>
                  <hr class="my-3">
                 <p><small class="text-muted">*Todos los precios en la p&aacute;gina son precios exclusivos de la tienda online.</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">      
            <div class="jumbotron bg-light">
                <div class="container">
                    <img src="<?php echo base_url('assets/img/Suspenso-logo.jpg');?>" data-interval="3000" width="200px" height="150px">
                      <h1 class="text-center font-weight-bold">Suspenso</h1>
                      <p class="lead"><b>
                        Historias intigrantes con finales inesperados, tramas complejas como tambien formas de emocionarte, todo eso en la seccion Suspenso.
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        </b> 
                        <a target= "_blank" href="<?php echo base_url('Suspenso');?>" style="color:silver;">Ir a Suspenso</a>
                      </p>
                      <hr class="my-3">
                      <p><small class="text-muted">*Todos los precios en la p&aacute;gina son precios exclusivos de la tienda online.</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">      
            <div class="jumbotron bg-light">
                <div class="container">
                    <img src="<?php echo base_url('assets/img/Variados-logo.png');?>" data-interval="3000" width="200px" height="150px">
                      <h1 class="text-center font-weight-bold">Variados</h1>
                      <p class="lead"><b>
                        Un día tranquilo para relajarse con una buena película o serie destinado para el entretenimiento en familia.
                        <br>
                        <br>
                        <br>
                        <br>
                        </b>
                         <a target= "_blank" href="<?php echo base_url('Variados');?>">Ir a Variados</a>
                      </p>
                      <hr class="my-3">
                      <p><small class="text-muted">*Todos los precios en la p&aacute;gina son precios exclusivos de la tienda online.</small></p>
                </div>
            </div>
        </div>

        <div class="col-md-6">      
            <div class="jumbotron bg-light">
                <div class="container">
                    <img src="<?php echo base_url('assets/img/Terror-logo.jpg');?>" data-interval="3000" width="200px" height="150px">
                      <h1 class="text-center font-weight-bold">Terror</h1>
                      <p class="lead"><b>
                       Películas de terror produce miedo, ansiedad, insomnio, fobias y traumas mentales, como también más ganas de seguir viéndolas, todo eso y más en la sección terror.
                        <br>
                        <br>
                        <br>
                        <br>
                        </b>
                         <a target= "_blank" href="<?php echo base_url('Terror');?>">Ir a Terror</a>
                      </p>
                      <hr class="my-3">
                      <p><small class="text-muted">*Todos los precios en la p&aacute;gina son precios exclusivos de la tienda online.</small></p>
                </div>
            </div>
        </div> 

			</div>
		</div>
		<?php } ?>

		<br><br>