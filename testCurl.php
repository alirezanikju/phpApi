<?php

$ch = curl_init();
$url = "http://localhost/Api/api.php?name=alireza&job=teacher";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response , true);

echo $data["status"]."<br>";
echo $data["msg"]."<br>";
echo "name: ".$data["data"]["name"]."<br>";
echo "job: ".$data["data"]["job"];


