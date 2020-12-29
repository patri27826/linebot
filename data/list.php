<?php
$connect = new PDO('mysql:host=localhost;dbname=line;charset=utf8mb4', 'patrick', '581136');

if (strtolower($message['text']) == "list")  {
                $client->replyMessage(array(
                    'replyToken' => $event['replyToken'],
                    'messages' => array(
                        array(
                            "type" => "flex",
                            "altText" => "Input your income and expense!",
                            "contents" => 
                            array(
                                "type" => "carousel",
                                "contents" => array(
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://margaret.tw/wp-content/uploads/nEO_IMG_DSC08040.jpg",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "六千牛肉湯",
                                                    "weight" => "bold",
                                                    "size" => "sm",
                                                    "wrap" => true
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "xs",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "文章跟六千比，文章是竹筍湯",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    ),
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://i3.achangpro.com/img.13shaniu.tw/uploads/20200204210244_40.jpeg",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "樂熊pasta",
                                                    "weight" => "bold",
                                                    "size" => "sm",
                                                    "wrap" => true
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "sm",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "想成為Gangstar的必經之路",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    ),
                                    array(
                                        "type" => "bubble",
                                        "size" => "micro",
                                        "hero" => array(
                                            "type" => "image",
                                            "url" => "https://lh3.googleusercontent.com/MM_AZX0NGMdSbj8MQYUwfOmWYp4m8XkmsCqCPYMy-laHaIDN9--wK0xXsZafN1r2XUVVn8JXifDKf9M70_TQuoTAvzNY17J3=s600",
                                            "size" => "full",
                                            "aspectMode" => "cover",
                                            "aspectRatio" => "320:213"
                                        ),
                                        "body" => array(
                                            "type" => "box",
                                            "layout" => "vertical",
                                            "contents" => array(
                                                array(
                                                    "type" => "text",
                                                    "text" => "辣訣",
                                                    "weight" => "bold",
                                                    "size" => "sm"
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "baseline",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gold_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "icon",
                                                            "size" => "xs",
                                                            "url" => "https://scdn.line-apps.com/n/channel_devcenter/img/fx/review_gray_star_28.png"
                                                        ),
                                                        array(
                                                            "type" => "text",
                                                            "text" => "4.0",
                                                            "size" => "sm",
                                                            "color" => "#8c8c8c",
                                                            "margin" => "md",
                                                            "flex" => 0
                                                        )
                                                    )
                                                ),
                                                array(
                                                    "type" => "box",
                                                    "layout" => "vertical",
                                                    "contents" => array(
                                                        array(
                                                            "type" => "box",
                                                            "layout" => "baseline",
                                                            "spacing" => "sm",
                                                            "contents" => array(
                                                                array(
                                                                    "type" => "text",
                                                                    "text" => "辣到哭，愛吃辣最愛",
                                                                    "wrap" => true,
                                                                    "color" => "#8c8c8c",
                                                                    "size" => "xs",
                                                                    "flex" => 5
                                                                )
                                                            )
                                                        )
                                                    )
                                                )
                                            ),
                                            "spacing" => "sm",
                                            "paddingAll" => "13px"
                                        )
                                    )
                                )
                            )
                        )
                        
                    )
                ));
               
            }