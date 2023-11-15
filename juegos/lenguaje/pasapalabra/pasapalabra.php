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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <section id="pantalla-inicial">
        <h1>PASAPALABRA</h1>
        <button id="comenzar">COMENZAR JUEGO</button>
        
    <button onclick="regresarAlInicio()" class="btn btn-info btn-lg ">Regresar al Inicio</button>
    <script>
        function regresarAlInicio() {
            window.location = "../../../bienvenida.php";
        }
    </script>
    </section>
    <section id="pantalla-juego">
        <div class="container">
            <span id="tiempo">60</span>
        </div>
    
        <div class="contendor-pregunta">
            <span id="letra-pregunta">Z</span>
            <h2 id="pregunta">Pregunta...</h2>
            <input type="text" id="respuesta">
            <div class="botones">
                <button id="responder">Responder</button>
                <button id="pasar">Pasa Palabra</button>
            </div>
        </div>
    </section>
    <section id="pantalla-final">
        <h1>Resumen</h1>
        <h3>Acertadas</h3>
        <span id="acertadas">
            10
        </span>
        <h3 id="score">40% de acierto</h3>
        <button id="recomenzar">Jugar de Nuevo</button>
        <button onclick="regresarAlInicio()" class="btn btn-info btn-lg ">Regresar al Inicio</button>
    <script>
        function regresarAlInicio() {
            window.location = "../../../bienvenida.php";
        }
    </script>
    </section>
      
    <script src="script.js"></script>
</body>
</html>