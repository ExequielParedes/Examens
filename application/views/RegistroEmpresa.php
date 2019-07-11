<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro empresa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <form name="FrmDatos" action="cliente/datos" method="post">
            <br><br>
            <fieldset>
                <legend>
                    <h2>Registro Empresa:</h2>
                </legend>
                <div class="from-group">
                    <label for="rut"><strong>Rut:</strong></label>
                    <input type="txtrut" placeholder="Rut Empresa" class="from-control" id="rut" required>
                </div>
                <div class="from-group">
                    <label for="nombre"><strong>Nombre:</strong></label>
                    <input type="txtnombre" placeholder="Nombre Empresa" class="from-control" id="nombre" required>
                </div>
                <div class="from-group">
                    <label for="email"><strong>Email:</strong></label>
                    <input type="email" placeholder="email" class="from-control" id="email" required>
                </div>
                <div class="from-group">
                    <label for="telefono"><strong>Telefono:</strong></label>
                    <input type="telefono" placeholder="numero" class="from-control" id="numero" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </fieldset>
        </form>
    </div>
</body>

</html>