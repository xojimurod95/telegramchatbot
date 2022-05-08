<?php
include 'Telegram.php';

$telegram = new Telegram("5295272780:AAHuxQUb7UV6V6KsEYh6f_u7vPoMpEYxpt4");

$chat_id = $telegram->ChatID();

$content = array('chat_id'=>$chat_id, 'text'=>'Assalomu aleykum aziz Obunachi, Sizga qanday yordam bera olaman.');
$telegram->sendMessage($content);

// webHook
// https://api.telegram.org/bot5295272780:AAHuxQUb7UV6V6KsEYh6f_u7vPoMpEYxpt4/setWebhook?url=https://j49803553.myjino.ru/telegrambot/zakazbot.php
?>