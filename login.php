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
    <link rel="stylesheet" href="assets/css/estilos.css">
    <script src="script.js"></script>
    <style>
    body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
    }
  
    #floating-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 50%;
    width: 50px;
    height: 50px;
    font-size: 20px;
    text-align: center;
    cursor: pointer;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    /* Alinea el ícono verticalmente */
    line-height: 50px;
    }
    
    #floating {
        position: fixed;
        bottom: 20px;
        right: 80px; /* Ajusta la posición del segundo botón */
        background-color: #007BFF;
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 20px;
        text-align: center;
        cursor: pointer;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        /* Alinea el ícono verticalmente */
        line-height: 50px;
        /* Utiliza tu imagen personalizada como fondo */
        background-image: url('images/perfil.png');
        background-size: cover; /* Ajusta el tamaño de la imagen */
    }
    </style>
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
                    <div class="">
                    <input type="password" name="add_password" id="passwordlog" placeholder="Contraseña" class="form-control" required="required">
                    <span class="show-password" id="showPasswordlog"><i class="fas fa-eye"></i></span>
                    </div>
                    <button>Entrar</button>
                    <a href="index.php" class="btn btn-info">Regresar al inicio</a>
                    <p>
                    <a href="recove/recovery.php" id="olvidar" title="Recuperar Clave">¿Has olvidado la contraseña?</a>
                    <?php 
    if(isset($_GET['message'])){
     
    ?>
      <div class="alert alert-primary" role="alert">
        <?php 
        switch ($_GET['message']) {
          case 'ok':
            echo 'Por favor, revisa tu correo';
            break;
          case 'success_password':
            echo 'Inicia sesión con tu nueva contraseña';
            break;
            
          default:
            echo 'Algo salió mal, intenta de nuevo';
            break;
        }
        ?>
      </div>
    <?php
    }
    ?>
                </form>

                <!--Register-->
                <form id="passwordForm" action="php/registro_usuario_be.php" method="POST" class="formulario__register" onsubmit="return validarFormulario()">
                    <h2>Regístrarse</h2>
                    <input type="text" name="add_nombre" id="add_nombre" placeholder="Nombres" class="form-control" required="required" oninput="validarLetras(event)">
                    <span id="mensaje-error" style="color: red;"></span><br>
                    <input type="email" name="add_email" id="add_email" placeholder="Correo eletrónico" class="form-control" required="required">
                    <input type="text" name="add_usuario" id="add_usuario" placeholder="Usuario" class="form-control" required="required" oninput="validarUsuario(event)">
                    <span id="mensaje-de-error" style="color: red;"></span><br>
                    <div class="form-group">
                    <div class="password-input">
                    <input type="password" id="password" name="password" placeholder="Contraseña" required>
                    <span class="show-password" id="showPassword"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="field-hint" id="passwordHint"></div>
                    </div>
                    <div class="form-group">
                    <div class="password-input">
                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmar Contraseña" required>
                    <span class="show-password" id="showConfirmPassword"><i class="fas fa-eye"></i></span>
                    </div>
                    <div class="field-hint" id="confirmPasswordHint"></div>
                    </div>
                    <button>Regístrarse</button>
                    <a href="index.php" class="btn btn-info">Regresar al inicio</a>
                </form>
            </div>
        </div>
        <a href="chat/index.php">
        <!-- Agrega el ícono de mensaje al botón utilizando la clase de FontAwesome -->
        <button id="floating-button"><i class="fas fa-envelope"></i></button>
        </a>
        <a href="chatbot/index.php">
        <!-- Agrega el ícono de mensaje al botón utilizando la clase de FontAwesome -->
        <button id="floating"></i></button>
        </a>

    </main>
    <script src="js/main.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>