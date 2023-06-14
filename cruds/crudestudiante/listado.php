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


?><!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listado Estudiantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="../Alert/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../Alert/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../css/style_cp.css">
    <link rel="stylesheet" href="../../assets/css/estiloscruds.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="//code.tidio.co/0sgmlyajwdv2mggigzd3f806aei3y0qw.js" async></script>
  </head>

<body>    
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="../../bienvenida.php"><img src="img/ap.ico" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="../../bienvenida.php">Inicio</a>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Registrar
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="Crud.php">Registros de Estudiantes</a></li>
                              <li><a class="dropdown-item" href="../crudpadres/CrudDos.php">Registrar Encargados</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Listados
                                  </a>
                                  <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="listado.php">Listado de Estudiantes</a></li>
                              <li><a class="dropdown-item" href="../crudpadres/listado.php">Listado de Encargados</a></li>
                                  </ul>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="../../php/cerrar_sesion.php">Cerrar Sesión</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
    <div class="container">
    <br>
        <br>
        <br>
        <br>
        <br>
        <center>
            <H1>Listado de estudiantes</H1>
        </center>
        <div class="container-fluid">
  <form class="d-flex">
  <input class="form-control me-2 light-table-filter" data-table="table_id" type="text" 
      placeholder="Buscar Estudiantes" class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i>
      <hr>
      </form>
  </div>
  <br>
        <div class="container">
            <hr>
            <table class="table table-striped table-dark table_id">
                <thead>
                    <tr>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Usuario</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Rol</th>
                        <th scope="col">Encargado</th>
                        <th scope="col">Foto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "Config/Conexion.php";

                    $Sql = "SELECT * FROM estudiantes";
                    $resultado = $conexion->query($Sql);

                    while ($Fila = $resultado->fetch_assoc()) { ?>

                        <tr>
                            <td><?php echo $Fila['nombres']?></td>
                            <td><?php echo $Fila['apellidos']?></td>
                            <td><?php echo $Fila['correo']?></td>
                            <td><?php echo $Fila['usuario']?></td>
                            <td><?php echo $Fila['edad']?></td>
                            <td><?php echo $Fila['rol']?></td>
                            <td><?php echo $Fila['Encargado']?></td>
                            <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['foto_estudiante'])?>" alt=""></td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="assets/js/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="js/buscador.js"></script>
  </body>

</html>