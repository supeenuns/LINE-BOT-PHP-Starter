<?php
$proxy = 'proxyurl:port';
$proxyauth = 'username:password';

$access_token = 'tHAk5YYeatup9nmdPCPpif4VKpR5yK61EMihBOwbspU2iIUMDEnMLLXrNEYUP+Witqr1fxeyX80ot4pjGjw+xgTrJuVA+Fn9LD+7oO/uDaJIvC0t8D30WTfgI/m7XcW2x4nJkAVPYjxhFuGnNKTKRwdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);


curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);

$result = curl_exec($ch);
curl_close($ch);

echo $result;