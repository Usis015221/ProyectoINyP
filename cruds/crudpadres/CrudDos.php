<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encargados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br>
        <center>
            <H1>Listado de Encargados</H1>
        </center>
        <br>
        <div class="container">

            <a href="NuevoEncargado.php" class="btn btn-dark">Agregar Encargado</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">DUI</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Config/Conexion.php";

                    $Sql = "SELECT * FROM encargados";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <th scope="row"><?php echo $Fila['id']?></th>
                            <td><?php echo $Fila['nombres']?></td>
                            <td><?php echo $Fila['apellidos']?></td>
                            <td><?php echo $Fila['correo']?></td>
                            <td><?php echo $Fila['usuario']?></td>
                            <td><?php echo $Fila['edad']?></td>
                            <td><?php echo $Fila['rol']?></td>
                            <td><?php echo $Fila['telefono']?></td>
                            <td><?php echo $Fila['dui']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['foto_encargado'])?>" alt=""></td>
                            <td>
                                <a href="Vista_Editar.php?Id=<?php echo $Fila["id"]?>" class="btn btn-warning">Editar</a>
                                <a href="EliminarEncargado.php?Id=<?php echo $Fila["id"]?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
            <a href="location: ../index.php" class="btn btn-info">Inicio</a>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>