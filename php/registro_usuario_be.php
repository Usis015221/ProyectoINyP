<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['add_nombre'];
    $correo = $_POST['add_email'];
    $usuario = $_POST['add_usuario'];
    $contrasena = $_POST['add_password'];
    $contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena)
              VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena')";


    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
            <script>
                alert("Este correo ya existe, utiliza otro");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario' ");

    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Este usuario ya existe, utiliza otro");
                window.location = "../login.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Almacenado exitosamente");
                window.location = "../login.php";
            </script>
        ';
    }else{
        echo '
            <script>
            alert("Usuario no almacenado");
            window.location = "../login.php";
            </script>
        '; 
    }

    mysqli_close($conexion);
?>