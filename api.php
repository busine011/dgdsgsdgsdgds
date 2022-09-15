<?php
include_once 'config.inc.php';
include_once 'engine.inc.php';

header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header('Access-Control-Allow-Methods: ');
$linkbase = trim("https://".$_GET['api']) ? "https://".$_GET['api'] : null;


if(!isset($linkbase)) {
    http_response_code(400);    
    echo json_encode(array("error"=>"método incorrecto"));    

} else {

    $engine = new DoNotLinkEngine($linkbase);

    $check = $engine->check();

    if($check !== true) {
        http_response_code(400);            
        echo json_encode(array("error"=>$check));
        return;
    }

    $code = $engine->shorten();

    if($code === NULL) {
        http_response_code(500);            
        echo json_encode(array("error"=>"Error del Servidor"));
        return;
    }

    $response = SERVER_NAME.SERVER_PATH.'/'.$code;
    echo $response;      
   
}
?>
