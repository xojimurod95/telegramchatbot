<?php
include 'Telegram.php';

$telegram = new Telegram('5295272780:AAEqmf_BSf5HjtESko8LxrBy5pwIe5N20JM');

$chat_id = $telegram->ChatID('2146587263');

$content = array('chat_id' => $chat_id,
                 'text' => 'Assalomu aleykum aziz Obunachi, Sizga qanday yordam bera olaman');
$telegram->sendMessage($content);

// webHook
// https://api.telegram.org/bot5295272780:AAEqmf_BSf5HjtESko8LxrBy5pwIe5N20JM/setWebhook?url=https://github.com/xojimurod95/telegramchatbot/zakazbot.php
?>
