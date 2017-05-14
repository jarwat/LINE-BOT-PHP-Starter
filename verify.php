<?php
$access_token = 'bVa6IkejUShXouRc6AS/RU0RzPtkOZvny7y+cZy998F1LKXXehoP2QZZOcE5avK/0cXl46cOLZyLAf1UX1OlCgIhnIkLGzQiAIA/tV/n0W5aCsp580HDEfZc+j3B5j2Qpuys3xDLDF1P+MPfnPpDQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
