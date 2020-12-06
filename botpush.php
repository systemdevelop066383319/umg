<?php



require "vendor/autoload.php";

$access_token = 'DrlozA4wrnAg1YBXJ6hGMiB+nNxv0IThrvg9IZU4T5/Swzp1U/jSuZfaYFNABu4PTw6b28Lo1e5Tu1HYQ5hJJ43n+5HzXsbPn3Ghh58IQwxq2U62Bkh8uR9S68OxA+YX63/Sdm11NJeJ6q2aPRjKpAdB04t89/1O/w1cDnyilFU=';

$channelSecret = 'd453aea02ba4d5c3b5484f6f05328f33';

$pushID = 'U01ec29ea8df3c45232a5df426e93f7c8';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







