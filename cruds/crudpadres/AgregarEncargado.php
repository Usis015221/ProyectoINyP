<?php

    include "Config/Conexion.php";

    $nombreencargado =$_POST["nombres"];
    $apellidoencargado = $_POST["apellidos"];
    $correoencargado = $_POST["correo"];
    $usuarioencargado = $_POST["usuario"];
    $edadencargado = $_POST["edad"];
    $rolencargado = $_POST["rol"];
    $telefonoencargado = $_POST["telefono"];
    $fotoencargado = addslashes(file_get_contents($_FILES['foto_encargado']['tmp_name']));
    $duiencargado = $_POST["dui"];

    $sql = "INSERT INTO `encargados` ( nombres , apellidos, correo, usuario, edad, rol, telefono, foto_encargado, dui) VALUES ('$nombreencargado','$apellidoencargado','$correoencargado','$usuarioencargado','$edadencargado','$rolencargado','$telefonoencargado','$fotoencargado','$duiencargado')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: CrudDos.php');
    }else {
        echo "No se insertaron los datos";
    }

 

