<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Pagina información</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
      <div class="jumbotron jumbotron-fluid">
          <div class="container">
              <h1 class="display-4">Pagina de Informacion y Contacto</h1>
              <p class="lead">Por cualquier duda o consulta escribenos aqui</p>
              <hr class="my-2">
                <!-- contact -->
<section class="contact-w3ls" id="contact">
	<div class="container">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contáctenos</h4>
				<p class="contact-agile2">Inscribíte Junto a nosostros</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        <label class="contact-p1">Nombre completo:</label>
                        <input type="text" class="form-control" name="name" id="name" required >
                        <p class="help-block"></p>
                    </div>	
                    <div class="control-group form-group">
                        <label class="contact-p1">Número de teléfono:</label>
                        <input type="tel" class="form-control" name="phone" id="phone" required >
						<p class="help-block"></p>
                    </div>
                    <div class="control-group form-group">
                        <label class="contact-p1">Dirección de correo electrónico:</label>
                        <input type="email" class="form-control" name="email" id="email" required >
						<p class="help-block"></p>
                    </div>
                    <input type="submit" name="sub" value="Suscribir" class="btn btn-outline-info">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					if(mysqli_query($con,$sql))
					echo"OK";
				}
				?>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
			<h4>Conectate con nosotros</h4>
			<p class="contact-agile1"><strong>Teléfono :</strong>+56 9 8456 5645</p>
			<p class="contact-agile1"><strong>Email :</strong> <a href="mailto:ISPS@gmail.com">ISPS@gmail.com</a></p>
			<p class="contact-agile1"><strong>Dirección :</strong> Concepcion,Chile</p>													
			<div class="social-bnr-agileits footer-icons-agileinfo">
		</div>
			<br />
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /contact -->
<p class="lead">
                  <a class="btn btn-outline-info" href="http://localhost/CodeIgniter-3.1.9/" role="button">Volver</a>
              </p>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>