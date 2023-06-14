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
    <title>Nuevo Estudiante</title>
    <script src="../Alert/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../Alert/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../css/style_cp.css">
    <link rel="stylesheet" href="../../assets/css/estiloscruds.css">

</head>
<body>

    <div class="container">
        <br>
        <h1>Nuevo Estudiante</h1>
        <br>
        <form action="AgregarEstudiante.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombres" required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="apellidos"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Estudiante</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="correo"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="usuario"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="edad"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rol</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="rol" placeholder="Rol 1:Estudiante y Rol 2:Encargado"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Encargado Estudiante</label>
                <input type="text" class="form-control" name="Encargado"  required="required">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Foto Estudiante</label>
                <input type="File" class="form-control" name="foto_estudiante"  required="required">
            </div>

            <script src="js/push.min.js"></script>
            <script>
             function push(){
                Push.Permission.request();
                Push.create('Estudiante Registrado', {
                body: 'El estudiante se ha registrado exitosamente',
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


        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="Crud.php" class="btn btn-info" onclick="push();">Regresar</a>
    </form>
    </div>

</body>
</html>