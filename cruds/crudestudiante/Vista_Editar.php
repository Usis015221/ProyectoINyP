<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "../../index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="../Alert/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../Alert/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../css/style_cp.css">
    <link rel="stylesheet" href="../../assets/css/estiloscruds.css">
    <title>Modificar Estudiante</title>
</head>

<body>
    <?php
        include "Config/Conexion.php";
        $Id = $_REQUEST['Id'];

        $Sql = "SELECT * FROM estudiantes WHERE Id = $Id";
        $resultado = $conexion->query($Sql);

        $Fila = $resultado->fetch_assoc();

    ?>

    <div class="container">
        <br>
        <center>
            <h1>Editar datos de Estudiante</h1>
        </center>
        <form action="EditarEstudiante.php?IdEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form-data">
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
            <input type="email" class="form-control" name="correoE" value="<?php echo $Fila['correo']?>">
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
            <label for="exampleInputEmail1" class="form-label">Editar Encargado</label>
            <input type="text" class="form-control" name="EncargadoE" value="<?php echo $Fila['Encargado']?>">
        </div>

        <img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['foto_estudiante'])?>" alt="">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Editar Foto</label>
            <input type="File" class="form-control" name="foto_estudiante" required="required">
        </div>

        <script src="js/push.min.js"></script>
            <script>
             function push(){
                Push.Permission.request();
                Push.create('Editaste datos', {
                body: 'Los datos del estudiante han sido editados y guardados exitosamente',
                icon: "img/ap.jpeg",
                timeout: 1500000,              
                vibrate: [100, 100, 100],    
                onClick: function() {
       
                window.location="https://google.es";

                console.log(this);
                     }  
            });
     }
</script>
        <button type="submit" class="btn btn-primary" onclick="push();">Guardar Cambios</button>
        <a href="Crud.php" class="btn btn-info">Regresar</a>
        </form>


    </div>

</body>

</html>