<?php

include ('line-bot-api/php/line-bot.php');

$channelSecret = '91d92ef78dabe8d1c878d211ea9894ab';
$access_token  = 'L251Y3XTAdYxI8aE1brFn58ob3Qjaej76QiEWG9r4DCzKNCnmElKH03h6G4v84gIm2+uik7bGT8TTHfEmqgAsUfyG8BOfsorBJzJmOrhUtaZULT39rAX/mxJ9XbwNZ/+U9Jxcf37mLlVGZo1XGXDpwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
	
if (!empty($bot->isEvents)) {
		
    $bot->replyMessageNew($bot->replyToken, json_encode($bot->message));

    if ($bot->isSuccess()) {
        echo 'Succeeded!';
        exit();
    }

    // Failed
    echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody(); 
    exit();

}
