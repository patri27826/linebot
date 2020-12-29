<?php
$connect = new PDO('mysql:host=localhost;dbname=line;charset=utf8mb4', 'patrick', '581136');

if (strtolower($message['text']) == "search" || $message['text'] == "搜尋") {
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','search');
    $sth->execute();
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'You can start search for somothing delicious!' //回復訊息
            ),array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'Type "goback" to back to the "start" state!' //回復訊息
            )
        )
    ));
}