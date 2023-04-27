<?php

    session_start();

    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor inicia sesión");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
<body>    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu de navegación</a>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registrar
          </a>
          <ul class="dropdown-menu">
          <a href="cruds/crudestudiante/Crud.php" class="btn btn-info">Registrar Estudiantes</a>
            <li><a class="dropdown-item" href="">Registrar Padres</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Registros
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Registros de Estudiantes</a></li>
            <li><a class="dropdown-item" href="#">Registros de Padres</a></li>
          </ul>
      </form>
    </div>
  </div>
</nav>
<h1>Bienvenido a la plataforma Aprendiendo Juntos</h1>
    <div class="contenedor__cerrar">
                <!--Cerrar sesion-->
                <form action="php/cerrar_sesion.php" class="formulario__cerrar">
                    <button class="btn btn-danger">Cerrar Sesión</button>
                </form>
            </div>
    <script src="assets/js/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>