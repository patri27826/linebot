<?php
if (strtolower($message['text']) == "goback") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'Are you sure you want to leave!' //回復訊息
            ),array(
                'type' => 'text', //訊息類型 (文字)
                'text' => 'If yes, Please enter "yes"' //回復訊息
            )
        )
    ));
    $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
    $sth->bindValue(':hp','goback');
    $sth->execute();
}