<?php



require "vendor/autoload.php";

$access_token = 'L251Y3XTAdYxI8aE1brFn58ob3Qjaej76QiEWG9r4DCzKNCnmElKH03h6G4v84gIm2+uik7bGT8TTHfEmqgAsUfyG8BOfsorBJzJmOrhUtaZULT39rAX/mxJ9XbwNZ/+U9Jxcf37mLlVGZo1XGXDpwdB04t89/1O/w1cDnyilFU=
';

$channelSecret = '91d92ef78dabe8d1c878d211ea9894ab';

$pushID = 'U768737850619feac0e14518912c8bbf0';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







