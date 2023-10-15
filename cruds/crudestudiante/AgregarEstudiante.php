<?php

    include "Config/Conexion.php";

    $nombreestudiante =$_POST["nombres"];
    $apellidoestudiante = $_POST["apellidos"];
    $correoestudiante = $_POST["correo"];
    $usuarioestudiante = $_POST["usuario"];
    $edadestudiante = $_POST["edad"];
    $rolestudiante = $_POST["rol"];
    $encargadoestudiante = $_POST["Encargado"];
    $fotoestudiante = addslashes(file_get_contents($_FILES['foto_estudiante']['tmp_name']));

    $sql = "INSERT INTO `estudiantes` ( nombres , apellidos, correo, usuario, edad, rol, Encargado, foto_estudiante) VALUES ('$nombreestudiante','$apellidoestudiante','$correoestudiante','$usuarioestudiante','$edadestudiante','$rolestudiante','$encargadoestudiante','$fotoestudiante')";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: NuevoEstudiante.php');
    }else {
        echo "No se insertaron los datos";
    }

 

