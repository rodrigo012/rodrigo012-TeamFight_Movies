<!DOCTYPE html>
<html>
<style>
div {
  background-image: url("assets/img/Fondo_1.jpg");
    background-repeat: repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
body{

  background-image: url("assets/img/Fondo_1.jpg");
    background-repeat: repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
h1 {
opacity: 0.8;
text-shadow: gray 1px 2px;
size: 90px;


}
h3 {
opacity: 0.9;


}
p{
color: white;
opacity: 0.8;
}
 </style>
 <div class="body">
 	<body>
 		 <div class="container">
        <h1 class="text-center mt-4 text-uppercase font-weight-bold font-italic" style="color:white" "text-underline-position: 90px;">TeamFight</h1>
    <img class="responsive mx-auto d-block" width=300 src="assets/img/logo.png">
    <main id="main">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

<script src="assets/js/jquery-3.2.1.slim.min.js">
    

</script>
<script src="assets/js/popper.min.js">
    
</script>
</div>
<body>




	<section class="container-fluid">

	<h1 class="text-center mt-4 text-uppercase font-weight-bold font-italic" style="color:white" >Informacion Util</h1>
	<br>

	<div class="row">
		<div class="col-sm-4">
		  	<section class="container-fluid">
				<h3 class="font-weight-bold text-center" style="color:white" >Dirección</h3>
				<p class="mb-4 ml-3 mr-2">
					Nuestra unica <strong>sede comercial</strong> se encuentra en la calle:
				</p>
				<p class="mb-4 ml-3 mr-2"><b> 9 de Julio 1449</b> (Corrientes, Argentina - CP: 3400).</p>
				<p class="mb-4 ml-3 mr-2">Nuestros <b>horarios comerciales</b> son 10hs a 20hs, hora local.</p>
				<img class="responsive mx-auto d-block" src="assets/img/local_comercial.png" width="150">
			</section>
		</div>
	    <div class="col-sm-4">
	  		<section class="container-fluid">
				<h3 class="font-weight-bold text-center" style="color:white" >Atención al cliente</h3>

				<p class="mb-4 ml-3 mr-2">
					Para realizar <strong>consultas</strong> correspondientes 
					a la <b>compra</b> o al <b>envio</b> de nuestros productos puede comunicarse a:
				</p>
				<p class="mb-4 ml-3 mr-2">Los <b>telefonos</b>:</p>
				<p class="mb-4 ml-3 mr-2"><b>+549379-001122 / +549379-001123</b></p>
				<p class="mb-4 ml-3 mr-2">- En <b>horarios</b> de 09hs a 13hs, hora de Argentina (UTF-3).</p>
				<img class="responsive" src="assets/img/mujer.png" width="100">
				<img class="responsive" src="assets/img/varon.png" width="100">
				<img class="responsive" src="assets/img/whatsapp_logo.png" width="100">
				<br>	
			</section>
	  	</div>
	  	<div class="col-sm-4">
	  		<section class="container-fluid">
	  			<h3 class="font-weight-bold text-center" style="color:white" >Correo Electronico</h3>
	  			<p class="mb-4 ml-3 mr-2">Las 24 hs del dia al email:</p>
				<p class="mb-4 ml-3 mr-2"><b>Teamfight@gmail.com</b></p>
				<img class="responsive mx-auto d-block" src="assets/img/email.png" width="100" >
			</section>
	  	</div>
	</div>
	<section class="mb-4">
<!--Formulario de contacto -->
    <h2 class="h1-responsive font-weight-bold text-center my-4" style="color: white; opacity:1">Contactanos</h2>
    <p class="text-center w-responsive mx-auto mb-5">¿Tiene alguna consulta que desea solucionarlo? Rellene el formulario y nuestro equipo contactaran con usted.</p>

    <div class="row justify-content-center">

        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <div class="row">

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="" style="color: gray; opacity:1">Su nombre</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="" style="color: gray; opacity:1">Su Email</label>
                        </div>
                    </div>


                </div>
   
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="" style="color: gray; opacity:1">El Asunto</label>
                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message" style="color: gray; opacity:1">Su mensaje</label>
                        </div>

                    </div>
                </div>

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary"  onclick="document.getElementById('#').submit();">Enviar</a>
            </div>
            <div class="status"></div>
        </div>

    </div>

 	</body>
 </div>

</section>
	</section> 
	<br>
	<br>
	<br>
</body>
</html>
