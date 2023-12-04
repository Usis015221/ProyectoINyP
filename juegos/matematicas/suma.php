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