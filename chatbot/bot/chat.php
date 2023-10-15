<?php
include "Bot.php";
$bot = new Bot;
$questions = [
    //que es apj
    "que es aprendiendo juntos?" => "Aprendiendo Juntos es un Sitio Web que fue desarrollado por la empresa Digital Solutions para poder potenciar las habilidades de los niños/as, brindando este sitio web a instituciones educativas y docentes para que lo utilicen como herramienta de apoyo para potenciar las habilidades de los niños/as.",
    "que es aprendiendo juntos" => "Aprendiendo Juntos es un Sitio Web que fue desarrollado por la empresa Digital Solutions para poder potenciar las habilidades de los niños/as, brindando este sitio web a instituciones educativas y docentes para que lo utilicen como herramienta de apoyo para potenciar las habilidades de los niños/as.",
    "aprendiendo juntos?" => "Aprendiendo Juntos es una herramienta desarrollada para potenciar las habilidades de los niños/as.",
    "aprendiendo juntos" => "Aprendiendo Juntos es una herramienta desarrollada para potenciar las habilidades de los niños/as.",
    "que es apjbot?" => "Soy yo, una inteligencia artificial desarrollada para resolver dudas acerca del sitio web.",
    "que es apjbot" => "Soy yo, una inteligencia artificial desarrollada para resolver dudas acerca del sitio web.",
    "apjbot?" => "Soy yo, una inteligencia artificial desarrollada para resolver dudas acerca del sitio web.",
    "apjbot" => "Soy yo, una inteligencia artificial desarrollada para resolver dudas acerca del sitio web.",
    "cuando fue creado aprendiendo juntos?" => "Aprendiendo Juntos fue creado en Abril del año 2023 por la ahora extinta empresa Digital Solutions y posteriormente fue adquirido por la empresa Thunder Bolts, actualmente dueños de Aprendiendo Juntos.",
    "cuando fue creado aprendiendo juntos" => "Aprendiendo Juntos fue creado en Abril del año 2023 por la ahora extinta empresa Digital Solutions y posteriormente fue adquirido por la empresa Thunder Bolts, actualmente dueños de Aprendiendo Juntos.",
    "cuando fue creado?" => "Aprendiendo Juntos fue creado en Abril del año 2023 por la ahora extinta empresa Digital Solutions y posteriormente fue adquirido por la empresa Thunder Bolts, actualmente dueños de Aprendiendo Juntos.",
    "cuando fue creado" => "Aprendiendo Juntos fue creado en Abril del año 2023 por la ahora extinta empresa Digital Solutions y posteriormente fue adquirido por la empresa Thunder Bolts, actualmente dueños de Aprendiendo Juntos.",
    "como puedo crear una cuenta?" => "Dirigite a la pantalla principal y da click sobre Iniciar Sesión/Registrar y te redigira a la pantalla para crear tu cuenta.",
    "como puedo crear una cuenta" => "Dirigite a la pantalla principal y da click sobre Iniciar Sesión/Registrar y te redigira a la pantalla para crear tu cuenta.",
    "Tengo problemas con el sitio web" => "Si tienes algún problema con el sitio web comunicate inmediatamente con Soporte Tecnico y diles tu problema, entra a cualquier pagina del sitio web y veras el icono de mensaje, da click sobre el icono y te llevara a la pagina de soporte tecnico.",
    "problemas con el sitio web" => "Si tienes algún problema con el sitio web comunicate inmediatamente con Soporte Tecnico y diles tu problema, entra a cualquier pagina del sitio web y veras el icono de mensaje, da click sobre el icono y te llevara a la pagina de soporte tecnico.",
    "problemas" => "Si tienes algún problema con el sitio web comunicate inmediatamente con Soporte Tecnico y diles tu problema, entra a cualquier pagina del sitio web y veras el icono de mensaje, da click sobre el icono y te llevara a la pagina de soporte tecnico.",
    "como puedo crear una cuenta" => "Dirigite a la pantalla principal y da click sobre Iniciar Sesión/Registrar y te redigira a la pantalla para crear tu cuenta.",
    "ademas de dar información, que más haces?" => "Por momentos soy payaso y cuento chistes xd",
    "ademas de dar informacion, que mas haces?" => "Por momentos soy payaso y cuento chistes xd",
    "ademas de dar información que más haces?" => "Por momentos soy payaso y cuento chistes xd",
    "ademas de dar informacion, que mas haces" => "Por momentos soy payaso y cuento chistes xd",
    "ademas de dar informacion que mas haces" => "Por momentos soy payaso y cuento chistes xd",
    "ademas de dar información, que más haces" => "Por momentos soy payaso y cuento chistes xd",
    "te sabes algún chiste" => "Por supuesto, quieres que te diga uno?",
    "claro" => "¿Cómo se llama el campeón de buceo japonés? Tokofondo xddd",
    "cuentame un chiste" => "¿Cómo se despiden los químicos? Ácido un placer xddd",
    "cuentame otro chiste" => "¿Cómo se llama el primo vegano de Bruce Lee? Broco Lee xddd",
    "cuentame otro" => "¿Cómo se llama el primo vegano de Bruce Lee? Broco Lee xddd",

    //name
    "como te llamas?" =>"Soy APJBot y estoy para servirte",
    "como te llamas" =>"Soy APJBot y estoy para servirte",
    "cual es tu nombre?" =>"Soy APJBot y estoy para servirte",
    "cual es tu nombre" =>"Soy APJBot y estoy para servirte",
    "tienes nombre?" =>"Soy APJBot y estoy para servirte",
    "tienes nombre" =>"Soy APJBot y estoy para servirte",



    //saludo
    "hola" =>"Hola que tal!",
    "un saludo" =>"como te va",
    "hello" =>"un gusto de verte",
 
    //despedida
    "adios" =>"cuidate",
    "hasta la proxima" =>"nos vemos pronto",
    "nos vemos" =>"te estare esperando",
    "bye" =>"Good bye ♥",
    "see you" =>"see you lader ♥",
    //
    "what is your name?" =>" my name is APJBot",
   


    "tu nombre es?" => "Mi nombre es " . $bot->getName(),
    "tu eres?" => "Yo " . $bot->getGender(),
    "tu eres" => "Yo " . $bot->getGender(),
    "que eres?" => "Yo " . $bot->getGender(),
    "que eres" => "Yo " . $bot->getGender()
    
];

if (isset($_GET['msg'])) {
   
    $msg = strtolower($_GET['msg']);
    $bot->hears($msg, function (Bot $botty) {
        global $msg;
        global $questions;
        if ($msg == 'hi' || $msg == "hello") {
            $botty->reply('Hola');
        } elseif ($botty->ask($msg, $questions) == "") {
            $botty->reply("Lo siento, Las preguntas deben estar relacionadas con el sitio web o aún no estoy lo suficientemente entrenado para responder tu pregunta.");
        } else {
            $botty->reply($botty->ask($msg,$questions));
        }
    });
}
