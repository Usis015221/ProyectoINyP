<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Juego de suma</title>
	<link rel="stylesheet" href="suma.css">
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
        /* Estilos para el cuadro de texto */
        
        .dropdown {
            position: fixed;
            display: inline-block;
            cursor: pointer;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 500px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            padding: 12px;
            z-index: 1;
        }
        
        .dropdown:hover .dropdown-content {
            display: block;
        }
        
        .dropdown:hover .dropdown-btn {
            color: #007BFF;
            /* Cambia el color del texto al pasar el cursor */
        }
        
        .dropdown-btn {
            margin: 0;
            color: #333;
            /* Color del texto por defecto */
        }
    </style>
	<h1>JUEGO DE SUMA</h1>
	<div class="container">
		<div class="izquierdo">
			<div class="container-operacion">
			 	<span id="suma">9 + 9 =</span>
			 	<span class="resultado" id="resultado"> 18</span>
			 </div>
			 <span class="msj" id="msj">
			 </span>
		</div>
		
        <div class="dropdown">
            <p class="dropdown-btn">¡Instrucciones!</p>
            <div class="dropdown-content">
                <p>Para jugar debes tener los conocimientos acerca de las sumas</p>
                <p>Como puedes observar se te presentara el ejercicio y las posibles respuestas.</p>
                <p>Debes dar clic sobre la respuesta que creas correcta.</p>
                <p>Si la respuesta a la que le diste clic es incorrecta se te mostrara un mensaje en letras rojas que dice "INTENTALO DE NUEVO".</p>
                <p>Pero si la respuesta es correcta se te mostrara un mensaje que dice "EXCELENTE" y se mostrara otro ejercicio, de lo contrario siempre se mostrara el mismo.</p>
                <p>El juego no tiene fin y solo es para que practiques.</p>
                <p>Cuando ya hallas terminado de jugar y quieras volver al inicio, abajo tienes un boton para que puedas volver al inicio.</p>
            </div>
        </div>
		<div class="derecha">
			<span id="op1" class="opcion" onclick="controlarRespuesta(this)">18</span>
			<span id="op2" class="opcion" onclick="controlarRespuesta(this)">17</span>
			<span id="op3" class="opcion" onclick="controlarRespuesta(this)">8</span>
		</div>
	</div>

	
	<section id="msj_correccion"></section>
	<br>
    <br>
	<section class="container-bottom">
	<button onclick="regresarAlInicio()">Regresar al Inicio</button>
	</section>
	</div>

	<script src="suma.js"></script>
	<script>
        function regresarAlInicio() {
            window.location = "../../index.php";
        }
    </script>
</body>
</html>