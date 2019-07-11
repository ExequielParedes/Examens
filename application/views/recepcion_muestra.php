<?php
defined('BASEPATH') or exit('No direct script access allowed');
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
    <title>Recepción de muestras</title>
</head>

<body>
    <div class="container">
        <div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">Ingreso de muestra</div>
                    <div <?= $this->session->flashdata('login_unsuccess') == null ? 'style="display:none;"' : 'style="display:block;"' ?> class="alert alert-primary" role="alert">
                        <?= $this->session->flashdata('login_unsuccess') ?>
                    </div>
                    <div style="padding-top:30px" class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form method="post" action="<?= base_url('RecepcionMuestra/guardar') ?>" class="form-horizontal" role="form">
                            <div style="margin-bottom: 25px" class="input-group">
                                <label for="fecha">Fecha de recepción</label>
                                <input type="date" class="form-control" name="fecha" value="" required>
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <input type="text" class="form-control" name="temp" value="" placeholder="Temperatura muestra" required>
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <input type="number" class="form-control" name="cantidad" value="" placeholder="Cantidad de muestra" required>
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <label for="usuario">Seleccione Un Cliente</label>
                                <select name="usuario" class="form-control">
                                    <?php foreach ($this->db->get('Particular')->result() as $usuario) : ?>
                                        <option value="<?= $usuario->idParticular ?>"><?= $usuario->rutParticular ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                <label for="usuario">Seleccione Un Cliente</label>
                                <select name="tipo" class="form-control">
                                    <?php foreach ($this->db->get('TipoAnalisis')->result() as $usuario) : ?>
                                        <option value="<?= $usuario->idTipoAnalisis ?>"><?= $usuario->nombre ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <button type="submit" class="btn btn-full btn-primary btn-block">Guardar</button>
                            </div>

                            <div class="input-group">
                                <a href="<?= base_url('muestras') ?>">Ver muestras</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>

</html>