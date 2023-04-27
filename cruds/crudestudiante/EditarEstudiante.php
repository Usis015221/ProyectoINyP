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
$encargado = $_POST["EncargadoE"];
$foto = addslashes(file_get_contents($_FILES['foto_estudiante']['tmp_name']));



$sql = "UPDATE estudiantes SET 
nombres = '$nombre', 
apellidos = '$apellido',
correo = '$correo',
usuario = '$usuario',
edad = '$edad',
rol = '$rol',
Encargado = '$encargado',
foto_estudiante = '$foto' WHERE Id = $Id";


$resultado = $conexion->query($sql);

if ($resultado) {
    header("Location:Crud.php");
}else {
    echo "No se insertaron los datos";
}