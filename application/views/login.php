<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>login</title>
</head>
<body>
<div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Ingreso</div>
                        <div <?= $this->session->flashdata('login_unsuccess') == null ? 'style="display:none;"' : 'style="display:block;"' ?> class="alert alert-primary" role="alert">
                          <?= $this->session->flashdata('login_unsuccess') ?>
                        </div>
                    </div>     
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form method="post" action="<?= base_url('cliente/login') ?>" id="loginform" class="form-horizontal" role="form">
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Ingrese Usuario" required>                                        
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                    </div>
                            <div class="input-group">
                                    </div>
                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <!-- IMPORTANTE: Para que el formulario funcione se de be creat un boton de tipo submit
                                      Ejemplo: type="submit" -->
                                      <button id="btn-login" type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            No tienes Cuenta 
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                            Registrate aqui
                                        </a>
                                        </div>
                                    </div>
                                </div>    
                            </form>
                        </div>                     
                    </div>  
                    <p class="lead">
                        <a class="btn btn-outline-info" href="http://localhost/CodeIgniter-3.1.9/" role="button">Volver</a>
                    </p>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <!-- IMPORTANTE la etiqueta form debe llevar el atributo action con la ruta del controlador el cual manejará los datos
                        Ejemplo: "base_url('cliente/guardar'" lleva al controlador y a la función guardar.
                        También se debe especificar el método por el cual queremos enviar los datos,
                        https://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html,
                        https://developer.mozilla.org/es/docs/Web/HTTP/Methods.
                        Casi siempre será por el método post, pero es recomendable estudiar los demas métodos. -->
                        <form action="<?= base_url('cliente/guardar') ?>" method="post">
                        <div class="panel-heading">
                            <div class="panel-title">Registro</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Ingreso</a></div>
                        </div>  
                        <div class="panel-body" >
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    <label for="rut" class="col-md-3 control-label">RUT</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="rut" placeholder="RUT">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email disponible">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Apellido</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="direccion" class="col-md-3 control-label">Dirección</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Contraseña</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Contraseña">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Registrar</button>  
                                    </div>
                                </div>
                         </div>
                    </div>
                    <p class="lead">
                  <a class="btn btn-outline-info" href="http://localhost/CodeIgniter-3.1.9/" role="button">Volver</a>
              </p>
                    
                </div>
    </div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
</html>