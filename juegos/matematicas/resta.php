<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    echo '
        <script>
            alert("Por favor inicia sesión");
            window.location = "../../index.php";
        </script>
    ';
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="resta.css">
    <title>Operaciones</title>
</head>

<body>
	<style>
		         button {
            cursor: pointer;
            background: linear-gradient(orange, darkorange);
            padding: 20px;
            border-radius: 50px;
            border: white 5px solid;
            font-size: 130%;
        }

        button:hover {
            background-color: #ffcc00;
        }
		</style>
    <div class="container">
        <h2>Juego de Restas</h2>
        <section class="container-operadores">
            <button id="resta" onclick="btnResta()">
                <i class="fa-solid fa-minus"></i>
            </button>
        </section>

        <section class="container-operacion">
            <span id="num1"></span>
            <span id="operacion"></span>
            <span id="num2"></span>
            <span> = </span>
            <input type="text" id="respuesta_usuario">
            <span id="corregir" onclick="corregir()">Comprobar</span>
        </section>

        <section id="msj_correccion"></section>
        <br>
        <br>
        <br>
        <br>
        <section class="container-bottom">
            <button onclick="regresarAlInicio()">Regresar al Inicio</button>
        </section>
    </div>
    

    <script src="resta.js"></script>

    <script>
        function regresarAlInicio() {
            window.location = "../../bienvenida.php";
        }
    </script>
</body>

</html>
