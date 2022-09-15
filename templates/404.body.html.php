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
       header('Location: https://www.youtube.com');
        return;
    }
    
    else{
       header('Location: https://www.youtube.com'); 
    }
}

?>
