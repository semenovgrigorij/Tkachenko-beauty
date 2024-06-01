<?php

// Замените на свой токен бота и ID чата
$telegramBotToken = '7023452834:AAGhC8JlV9s6phdjIZIrHofyxGobJ7e-GFc';
$chatId = '1316558920';

function sendMessageToTelegram() {
    global $telegramBotToken, $chatId;

    $message = "Ваш сайт был посещен!";
    $url = "https://api.telegram.org/bot$telegramBotToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

     $response = file_get_contents($url);
     if ($response === false) {
        error_log("Ошибка при отправке уведомления в Телеграм");
    } else {
        error_log("Уведомление успешно отправлено в Телеграм");
    }
    

}

// Вызываем функцию отправки уведомления при каждом запросе к серверу
sendMessageToTelegram();

// Далее можно добавить любую логику обработки запроса к вашему серверу

