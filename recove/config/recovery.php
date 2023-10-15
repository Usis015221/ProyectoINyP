<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email = $_POST['email'];
$query = "SELECT * FROM usuarios where email = '$email' AND status = 1";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if($result->num_rows > 0){
  $mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.office365.com';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->SMTPAuth   = true;
    $mail->Username   = 'apsoporte08@outlook.es';
    $mail->Password   = 'soporte08';
    $mail->Port       = 587;

    $mail->setFrom('apsoporte08@outlook.es', 'Soporte Tecnico');
    $mail->addAddress($email);
    $mail->isHTML(true);
    $mail->Subject = 'Recuperación de contraseña';
    $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visita la página de <a href="localhost/ProyectoINyP/recove/change_password.php?id='.$row['id'].'">Restablecer contrasena</a>';

    $mail->send();
    header("Location: ../../login.php?message=ok");
} catch (Exception $e) {
  header("Location: ../../login.php?message=error");
}

}else{
  header("Location: ../../login.php?message=not_found");
}

?>
