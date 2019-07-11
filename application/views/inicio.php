<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<title>Pagina de Inicio</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<style>
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Lato", sans-serif
  }

  .w3-bar,
  h1,
  button {
    font-family: "Montserrat", sans-serif
  }

  .fa-anchor,
  .fa-coffee {
    font-size: 200px
  }
</style>

<body>

  <!-- Navbar -->
  <div class="w3-top">
    <div class="w3-bar w3-red w3-card w3-left-align w3-large">
      <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
      <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white">Pagina Inicio</a>
      <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"></a>
      <?php if ($this->session->userdata != null) : ?>
        <a href="<?= base_url('RecepcionMuestra') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Recepcion de Muestras</a>
        <a href="<?= base_url('Muestras') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ver Muestras</a>
        <a href="<?= base_url('RegistrarCliente') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Registrar cliente</a>
      <?php endif ?>
      <a href="<?= base_url('acercade') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Acerca de ...</a>
      <!--  IMPORTANTE usar el método base_rul() para imprimir las rutas del sistema en los links o botones. Se usa de la sigiente forma, base_url(): imprime la  variable $config['base_url'] en el archivo config de la carpeta cofig. Si la variable esta vacía la el método base_url() imprime localhost.
    Adicianalmente base_url() acepta un parametro de tipo string que esla parte final de la ruta.
    Ejemplo base_url('cliente') imprime lo siguiente: localhost/cliente.
    -->
      <a <?= $this->session->userdata('user') != null ? 'style="display:none;"' : 'style="display:block;"' ?> href="<?= base_url('cliente') ?>" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Ingreso Usuario</a>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
      <a href="#" class="w3-bar-item w3-button w3-padding-large"></a>
      <a href="http://localhost/presupuesto_trabajo/" class="w3-bar-item w3-button w3-padding-large">Recepcion de Muestras</a>
      <a href="http://localhost/CodeIgniter-3.1.9/index.php/Acercade" class="w3-bar-item w3-button w3-padding-large">Acerca de..</a>
      <a <?= $this->session->userdata('user') != null ? 'style="display:none;"' : 'style="display:block;"' ?> href="<?= base_url('cliente') ?>" class="w3-bar-item w3-button w3-padding-large">Ingreso Usuario</a>
    </div>
  </div>

  <!-- Header -->
  <header class="w3-container w3-red w3-center" style="padding:128px 16px">
    <h1 class="w3-margin w3-jumbo">ISP</h1>
  </header>

  <!-- IMPORTANTE flashdata son mensajes que el usuario resive solo una vez, luego se borran -->

  <div <?= $this->session->flashdata('login_success') == null ? 'style="display:none;"' : 'style="display:block;"' ?> class="alert alert-primary" role="alert">
    <?= $this->session->flashdata('login_success') ?>
  </div>


  <!-- First Grid -->
  <div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-twothird">
        <h1>Nuestra Mision</h1>
        <h5 class="w3-padding-32">Contribuir a la salud pública del país, como la Institución Científico-Técnica del Estado, que desarrolla con calidad las funciones de Referencia, Vigilancia, Autorización y Fiscalización en el ámbito de sus competencias.</h5>
      </div>

      <div class="w3-third w3-center">
        <img src="imagenes/logos.jpg" class="img-rounded" alt="imagen">
      </div>
    </div>
  </div>

  <!-- Second Grid -->
  <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
      <div class="w3-third w3-center">
        <img src="http://www.ispch.cl/sites/default/files/u53/banner-fotos01.jpg" class="img-rounded" alt="imagene" width="300" ; height="200" ;>
      </div>

      <div class="w3-twothird">
        <h1>Nuestra Vision</h1>
        <h5 class="w3-padding-32">En el 2018 seremos la Institución de excelencia Científico-Técnica, de Salud Pública del Estado de Chile, certificada, acreditada y reconocida a nivel nacional e internacional.</h5>
      </div>
    </div>
  </div>

  <div class="text-center display-3"><strong>Noticias ISP</strong></div>
  <!-- noticias-->
  <div class="container-fluid">
    <div class="row">
      <br>
      <div class="col" style="background-color:lavender;">
        <strong>ISP explica efectos de Escopolamina, mejor conocida como Burundanga</strong>
        <br><br>
        <img src="http://www.ispch.cl/sites/default/files/imagecache/Noticia_Slideshow_350/noticia/2018/06/Extranet-Burundanga01A.jpg" alt="imagen" width="400" ; height="200" ;>
        <br><br>
        <p>El Instituto de Salud Pública de Chile (ISP), hace un llamado a la población a conocer los reales efectos de la Escopolamina mejor conocida como “Burundanga”, para estar atento a posibles intoxicaciones con dicha droga.</p>
      </div>
      <div class="col" style="background-color:lavender;">
        <strong>ISP capacita a usuarios sobre el sistema de tramitación “Certificado de Destinación Aduanera (CDA) para dispositivos médicos sin registro sanitario”</strong>
        <br><br>
        <img src="http://www.ispch.cl/sites/default/files/imagecache/Noticia_Dentro_270x120/noticia/2018/06/DSC_0468.JPG" alt="" width="400" height="180">
        <br>
        <p>Este trámite, coordinado entre el ISP y el Servicio Nacional de Aduanas, es una exigencia para todos aquellos Dispositivos Médicos que a la fecha, no se encuentran sometidos a exigencia de registro sanitario. De esta forma el ISP, da inicio a la vigilancia sobre este tipo de elementos sobre el cual, al día de hoy, no existía mayor control en cuanto a cantidades, tipos, procedencia, entre otros.</p>
      </div>
      <div class="col" style="background-color:lavender;">
        <strong>Instituto de Salud Pública de Chile realizó Cuenta Pública Participativa</strong>
        <br><br>
        <img src="http://www.ispch.cl/sites/default/files/imagecache/Noticia_Dentro_270x120/noticia/2018/05/Extranet-CuentaPublica01A.jpg" alt="" width="400" height="180">
        <br>
        <p>Este miércoles, la Directora (s) María Judith Mora Riquelme rindió la Cuenta Pública Participativa, del trabajo desarrollado durante el año 2017 por el Instituto de Salud Pública de Chile (ISP). </p>
        <p>En su intervención, la autoridad entregó los principales resultados de gestión 2017, en el marco de los cuatro ejes estratégicos que apuntan a mejorar y fortalecer los procesos y cobertura, como Laboratorio Nacional y de Referencia del país y Autoridad Reguladora de Medicamentos de Referencia Regional.</p>
      </div>
    </div>
  </div>

  <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Esperamos que le sea util</h1>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-64 w3-center w3-opacity">
    <div class="w3-xlarge w3-padding-32">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
  </footer>

  <script>
    // Used to toggle the menu on small screens when clicking on the menu button
    function myFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
      } else {
        x.className = x.className.replace(" w3-show", "");
      }
    }
  </script>

</body>

</html>