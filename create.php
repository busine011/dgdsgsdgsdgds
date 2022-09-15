
<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");


if (isset($_GET['api'])) {
$API =  $_GET['api'];   
$short_url=''.substr(md5($API.mt_rand()),0,10);
    
$content.= '
<?php
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("X-Robots-Tag: noindex, nofollow");
header("Referrer-Policy: no-referrer");
header("Pragma: no-cache");
?>
<script src="'.$API.'" type="text/javascript" async="true"></script>
';

file_put_contents("blob" . "/" .$short_url. ".php" , $content);
$permalink = "https://z3s.dev/" . "blob/" .$short_url.".php";
echo $permalink;

}
?>