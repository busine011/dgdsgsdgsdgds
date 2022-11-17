<?php
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: no-referrer');
if (preg_match('/bot|crawl|curl|dataprovider|search|get|spider|find|java|majesticsEO|google|yahoo|teoma|contaxe|yandex|libwww-perl|facebookexternalhit|facebook(external)/i', $_SERVER['HTTP_USER_AGENT'])) {
http_response_code(403); 
exit();
}
?>
