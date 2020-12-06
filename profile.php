<?php


$access_token = 'DrlozA4wrnAg1YBXJ6hGMiB+nNxv0IThrvg9IZU4T5/Swzp1U/jSuZfaYFNABu4PTw6b28Lo1e5Tu1HYQ5hJJ43n+5HzXsbPn3Ghh58IQwxq2U62Bkh8uR9S68OxA+YX63/Sdm11NJeJ6q2aPRjKpAdB04t89/1O/w1cDnyilFU=';

$userId = 'U01ec29ea8df3c45232a5df426e93f7c8';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

