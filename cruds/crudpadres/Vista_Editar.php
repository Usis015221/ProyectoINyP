<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Modificar Encargado</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM encargados WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Editar datos de Encargado</h1>
        </center>
        <form action="EditarEncargado.php?IdEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Nombre</label>
            <input type="text" class="form-control" name="nombresE" value="<?php echo $Fila['nombres']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Apellido</label>
            <input type="text" class="form-control" name="apellidosE" value="<?php echo $Fila['apellidos']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Correo</label>
            <input type="text" class="form-control" name="correoE" value="<?php echo $Fila['correo']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Usuario</label>
            <input type="text" class="form-control" name="usuarioE" value="<?php echo $Fila['usuario']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Edad</label>
            <input type="text" class="form-control" name="edadE" value="<?php echo $Fila['edad']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Rol</label>
            <input type="text" class="form-control" name="rolE" value="<?php echo $Fila['rol']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Telefono</label>
            <input type="text" class="form-control" name="TelefonoE" value="<?php echo $Fila['Telefono']?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">DUI</label>
            <input type="text" class="form-control" name="DUIE" value="<?php echo $Fila['DUI']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['foto_encargado'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Foto</label>
            <input type="File" class="form-control" name="foto_encargado">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="Crud.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>