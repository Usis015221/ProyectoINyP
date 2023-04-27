<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Nuevo Estudiante</title>
</head>
<body>
    <div class="container">
        <br>
        <h1>Nuevo Estudiante</h1>
        <br>
        <form action="AgregarEstudiante.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nombres Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nombres">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Apellidos Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="apellidos">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Correo Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="correo">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Usuario Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="usuario">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Edad Estudiante</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="edad">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Rol</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="rol">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Encargado Estudiante</label>
                <input type="text" class="form-control" name="Encargado">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Foto Estudiante</label>
                <input type="File" class="form-control" name="foto_estudiante">
            </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
        <a href="Crud.php" class="btn btn-info">Regresar</a>
    </form>
    </div>

</body>
</html>