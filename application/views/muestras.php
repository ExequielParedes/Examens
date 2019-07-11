<!DOCTYPE html>
<html>

<head>
    <title>Muestras</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Muestras</h4>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>Fecha Recepción</th>
                            <th>Temperatura</th>
                            <th>Cantidad</th>
                            <th>Cliente</th>
                            <th>Código Empleado</th>
                            <th>Tipo</th>
                            <th>Acción</th>
                        </thead>
                        <tbody>
                            <?php foreach ($muestras as $muestra) : ?>
                                <tr>
                                    <td><?= $muestra->fechaRecepcion ?></td>
                                    <td><?= $muestra->temperaturaMuestra ?></td>
                                    <td><?= $muestra->cantidadMuestra ?></td>
                                    <td><?= $muestra->rutParticular ?></td>
                                    <td><?= $muestra->rutEmpleadoRecibe ?></td>
                                    <td><?= $muestra->nombre ?></td>
                                    <td>
                                        <a class="btn btn-primary" href="<?= base_url('Muestras/editar/' . $muestra->idAnalisisMuestras) ?>">Editar</a>
                                        <form action="<?= base_url('Muestras/eliminar') ?>" method="post">
                                            <input type="hidden" name="idAnalisisMuestras" value="<?= $muestra->idAnalisisMuestras ?>">
                                            <button class="btn btn-danger" type="submit">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <td>

                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a class="btn btn-primary pull-right" href="<?= base_url('RecepcionMuestra') ?>">Ingresar nueva muestra</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>