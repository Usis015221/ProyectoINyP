<?php

    session_start();

    if(isset($_SESSION['usuario'])){
        header("location: bienvenida.php");
    }



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DS - Aprendiendo Juntos</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="../Alert/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="../Alert/sweetalert.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="../css/style_cp.css">
    <link rel="stylesheet" href="../../assets/css/estiloscruds.css">
    <script src="//code.tidio.co/0sgmlyajwdv2mggigzd3f806aei3y0qw.js" async></script>
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>

<body>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" name="add_email" id="add_email" placeholder="Correo eletrónico" class="form-control" required="required">
                    <input type="password" name="add_password" id="add_password" placeholder="Contraseña" class="form-control" required="required">
                    <button>Entrar</button>
                    <a href="index.php" class="btn btn-info">Regresar al inicio</a>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="add_nombre" id="add_nombre" placeholder="Nombres" class="form-control" required="required">
                    <input type="email" name="add_email" id="add_email" placeholder="Correo eletrónico" class="form-control" required="required">
                    <input type="text" name="add_usuario" id="add_usuario" placeholder="Usuario" class="form-control" required="required">
                    <input type="password" name="add_password" id="add_password" placeholder="Contraseña" class="form-control" required="required">
                    <button>Regístrarse</button>
                    <a href="index.php" class="btn btn-info">Regresar al inicio</a>
                </form>
            </div>
        </div>

    </main>

    <script src="assets/js/script.js"></script>
</body>

</html>