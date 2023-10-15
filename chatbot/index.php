<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>APJBot ChatBot</title>
    <style>
        body {
            background-image: url(img/fondooo.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif;
            font-size: 16px;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 90%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .chatbox {
            background-color: #f4f4f4;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .header {
            background-color: #007BFF;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header h4 {
            margin: 0;
            font-size: 18px;
        }

        .header img {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .body {
            background-color: #fff;
            border-radius: 10px;
            padding: 15px;
            min-height: 300px;
            max-height: 300px;
            overflow-y: scroll;
            margin-top: 10px;
        }

        .alicia {
            background-color: #007BFF;
            color: #fff;
            border-radius: 10px;
            padding: 10px;
            margin: 10px 0;
        }

        .chat input[type="text"] {
            width: 100%;
            padding: 10px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-top: 10px;
        }

        .chat input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .creador {
            background-color: crimson;
            color: #fff;
            font-size: 14px;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
          /* Estilos para el cuadro de texto */
          .info-box {
            background-color: #f4f4f4;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px; /* Espacio entre el chatbox y el cuadro de texto */
            float: right; /* Colocar el cuadro de texto a la derecha */
            position: relative; /* Habilitar posicionamiento relativo */
            top: 0; /* Posición inicial en la parte superior */
        }

        .info-box p {
            margin: 0;
        }
        #btn2 {
    background-color: #FF5733; /* Cambia el color a tu elección */
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}
    </style>
</head>

<body>
<div class="info-box">
        <p>Esto puedes preguntarle a APJBot!!!</p>
        <p>Escribe hola</p>
        <p>Como te llamas?</p>
        <p>No sabes que preguntar, intenta con estas preguntas :)</p>
        <p>Que es aprendiendo juntos?</p>
        <p>Aprendiendo juntos?</p>
        <p>Que es APJBot?</p>    
        <p>Cuando fue creado aprendiendo juntos?</p>
        <p>Como puedo crear una cuenta?</p>
        <p>Ademas de dar información, que más haces?</p>
        </div>
    <div class="container">
        <div class="chatbox">
            <div class="header">
                <h4><img src='img/perfil.png' class='imgRedonda'/> APJBot</h4>
            </div>
            <div class="body" id="chatbody">
                <p class="alicia">Hola! Soy APJBot. Estoy aquí para responder preguntas relacionadas con el Sitio Web. ¿En qué puedo ayudarte?</p>
                <div class="scroller"></div>
            </div>
            <form class="chat" method="post" autocomplete="off">
                <div>
                    <input type="text" name="chat" id="chat" placeholder="Pregúntale algo" />
                </div>
                <div>
                    <input type="submit" value="Enviar" id="btn" />
                    <a href="../index.php" id="btn2" >Regresar al inicio</a>
                </div>
            </form>
        </div>
    </div>
    
    
    <script src="app.js"></script>
    <script>
        // Función para desplazar automáticamente la pantalla de mensajes hacia abajo
        function scrollChatToBottom() {
            var chatBody = document.getElementById("chatbody");
            chatBody.scrollTop = chatBody.scrollHeight;
        }

        // Llama a la función para desplazar automáticamente cuando se cargue la página
        window.onload = scrollChatToBottom;

        // Observa cambios en el contenido del chat y desplaza automáticamente
        var chatObserver = new MutationObserver(scrollChatToBottom);
        chatObserver.observe(document.getElementById("chatbody"), { childList: true });
    </script>
</body>

</html>
