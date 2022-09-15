<?php
include_once 'config.inc.php';
include_once 'engine.inc.php';
include_once 'BaseDatosMySql.php';


header('Content-type: application/json');
header('Access-Control-Allow-Origin: *');  //I have also tried the * wildcard and get the same response
header('Access-Control-Allow-Methods: ');
$cottorra = trim($_GET['cottorra']) ? $_GET['cottorra'] : null;
$linkbase = trim("https://".$_GET['script']) ? "https://".$_GET['script'] : null;


$getcottorra=$pdo->prepare("SELECT cottorra FROM cottorras WHERE  id='".$cottorra."'");
$getcottorra->execute();
$info_cottorra=$getcottorra->fetchAll(PDO::FETCH_ASSOC);
foreach ($info_cottorra as $cottorraextraida) { }
$description = $cottorraextraida['cottorra'];


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

    $response = array(
        "url"=>$description." ".SERVER_NAME.SERVER_PATH.'/'.$code
    );


    echo json_encode($response);      
   
}
?>
