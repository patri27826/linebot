<?php
if (strtolower($message['text']) == "check all" || $message['text'] == "see all") {
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','list');
    $sth->execute();

    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'You can check all the restaurant here!' //回復訊息
            ),array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'Enter "list"' //回復訊息
            )
        )
    ));
}