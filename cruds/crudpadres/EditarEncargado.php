<?php


error_reporting(1);

include "Config/Conexion.php";

$Id = $_REQUEST['IdEditar'];

$nombre =$_POST["nombresE"];
$apellido = $_POST["apellidosE"];
$correo = $_POST["correoE"];
$usuario = $_POST["usuarioE"];
$edad = $_POST["edadE"];
$rol = $_POST["rolE"];
$telefono = $_POST["telefonoE"];
$dui = $_POST["duiE"];
$foto = addslashes(file_get_contents($_FILES['foto_encargado']['tmp_name']));



$sql = "UPDATE encargados SET 
nombres = '$nombre', 
apellidos = '$apellido',
correo = '$correo',
usuario = '$usuario',
edad = '$edad',
rol = '$rol',
telefono = '$telefono',
dui = '$dui',
foto_encargado = '$foto' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:CrudDos.php");
}else {
    echo "No se insertaron los datos";
}