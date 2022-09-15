<?php
//archivo de configuración
//los valores predeterminados son adecuados para un entorno de prueba XAMPP

//dominio del servidor. incluido el protocolo. sin barra al final
define('SERVER_NAME', "https://".$_SERVER["HTTP_HOST"]);
//ruta del servidor. barra al principio. sin barra al final. dejar vacío para la ruta raíz
define('SERVER_PATH', "");

//nombre del sitio como se usa en las preguntas frecuentes y el título.
//si cambia esto, probablemente quiera cambiar también el título formateado en la plantilla header.html.php
define('SITE_NAME', $_SERVER["HTTP_HOST"]);

//database configuration
define('DB_SERVER', "localhost:3306");
define('DB_USERNAME', "apilink");
define('DB_PASSWORD', "Geniunes12-");
define('DB_NAME', "apilink");

//min length for generated codes
define('MIN_CODE_LENGTH', 8);
//salt for generated codes
define('CODE_SALT', "wplavytfomcb");

//do not touch the lines below
define('URL_REGEX', "/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\x{00a1}-\x{ffff}0-9]-*)*[a-z\x{00a1}-\x{ffff}0-9]+)(?:\.(?:[a-z\x{00a1}-\x{ffff}0-9]-*)*[a-z\x{00a1}-\x{ffff}0-9]+)*(?:\.(?:[a-z\x{00a1}-\x{ffff}]{2,})).?)(?::\d{2,5})?(?:[\/?#]\S*)?$/ui");    
?>
