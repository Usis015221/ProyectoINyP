<?php

    session_start();

    include 'conexion_be.php';

    $correo = $_POST['add_email'];
    $contrasena = $_POST['add_password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE
    email='$correo' and password ='$contrasena'");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../bienvenida.php");
        exit;
    }else{
        echo '
            <script>
                alert("El correo no existe o la contraseña esta mal escrita, por favor verifique los datos introducidos");
                window.location = "../login.php";
            </script>
        ';
        exit;    
    }

?>