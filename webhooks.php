<?php // callback.php

require "vendor/autoload.php";
require_once('vendor/linecorp/line-bot-sdk/line-bot-sdk-tiny/LINEBotTiny.php');

$access_token = 'L251Y3XTAdYxI8aE1brFn58ob3Qjaej76QiEWG9r4DCzKNCnmElKH03h6G4v84gIm2+uik7bGT8TTHfEmqgAsUfyG8BOfsorBJzJmOrhUtaZULT39rAX/mxJ9XbwNZ/+U9Jxcf37mLlVGZo1XGXDpwdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
// Validate parsed JSON data


echo $events ;
