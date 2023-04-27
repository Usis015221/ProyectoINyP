<?php

    include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM estudiantes WHERE Id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: Crud.php");
    }else {
        echo "No se elimino el dato";
    }
