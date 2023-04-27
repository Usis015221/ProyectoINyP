<?php

    include "Config/Conexion.php";

    $Id = $_REQUEST['Id'];

    $sql = "DELETE FROM encargados WHERE Id = $Id";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: CrudDos.php");
    }else {
        echo "No se elimino el dato";
    }
