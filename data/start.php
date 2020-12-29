<?php
$connect = new PDO('mysql:host=localhost;dbname=line;charset=utf8mb4', 'patrick', '581136');
if (strtolower($message['text']) == "start" || strtolower($message['text']) == "介紹") {
                $sth = $connect->prepare('UPDATE line_state SET line_state = :hp WHERE line_id = 1');
                $sth->bindValue(':hp','start');
                $sth->execute();

                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "helo",
                            "contents" => array(
                                "type" => "bubble",
                                "body" => array(
                                    "type" => "box",
                                    "layout" => "vertical",
                                    "contents" => array(
                                        array(
                                            "type" => "box",
                                            "layout" => "horizontal",
                                            "contents" => array(
                                                array(
                                                    "type" => "image",
                                                    "size" => "5xl",
                                                    "aspectMode" => "cover",
                                                    "aspectRatio" => "150:196",
                                                    "gravity" => "center",
                                                    "flex" => 1,
                                                    "url" => "https://i.ibb.co/Zg837Yf/DSC-0138-1.jpg"
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "image",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip8.jpg",
                                                            "size" => "full",
                                                            "aspectMode" => "cover",
                                                            "aspectRatio" => "150:98",
                                                            "gravity" => "center"
                                                        ),
                                                        array(
                                                            "type" => "image",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/flexsnapshot/clip/clip9.jpg",
                                                            "size" => "full",
                                                            "aspectMode" => "cover",
                                                            "aspectRatio" => "150:98",
                                                            "gravity" => "center"
                                                        )
                                                    ),
                                                    "flex" => 1
                                                )
                                            )
                                        ),
                                        array(
                                            "type" => "box",
                                            "layout" => "horizontal",
                                            "contents" => array(
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "image",
                                                            "url" => "https://i.ibb.co/8KG397b/DSC-0020.jpg",
                                                            "aspectMode" => "cover",
                                                            "size" => "full"
                                                        )
                                                    ),
                                                    "cornerRadius" => "100px",
                                                    "width" => "72px",
                                                    "height" => "72px"
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "text",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "span",
                                                                    "text" => "Nihao",
                                                                    "weight" => "bold",
                                                                    "color" => "#000000"
                                                                ),
                                                                array(
                                                                    "type" => "span",
                                                                    "text" => "     "
                                                                ),
                                                                array(
                                                                    "type" => "span",
                                                                    "text" => "Hi, I can introduce some yummy food for you in Taiwan, enjoy it !
                                                                    input \"list\" to get more information"
                                                                )
                                                            ),
                                                            "size" => "sm",
                                                            "wrap" => true
                                                        ),
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "1,140,753 used",
                                                                    "size" => "sm",
                                                                    "color" => "#bcbcbc"
                                                                )
                                                            ),
                                                            "spacing" => "sm",
                                                            "margin" => "md"
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "xl",
                                            "paddingAll" => "20px"
                                        )
                                    ),
                                    "paddingAll" => "0px"
                                )
                            )
                        )
                        
                    )
                ));
            }