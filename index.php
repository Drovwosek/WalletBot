<?php
require_once 'vendor/autoload.php';
use Telegram\Bot\Api;

$bot->command('hello', function ($message) use ($bot) {
    $text = $message->getText();
    $param = str_replace('/hello ', '', $text);
    $answer = 'Неизвестная команда';
    if (!empty($param))
    {
    	$answer = 'Привет, ' . $param;
    }
    $bot->sendMessage($message->getChat()->getId(), $answer);
});

