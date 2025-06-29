<?php

$url = "http://localhost/Api/api_post.php";

$data = ["name" => "علیرضا", "job" => "معلم"];

$ch = curl_init($url);
curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
curl_setopt($ch , CURLOPT_POST, true);
curl_setopt($ch , CURLOPT_POSTFIELDS , json_encode($data));
curl_setopt($ch , CURLOPT_HTTPHEADER , ["Content-Type:application/json"]);
$response = curl_exec($ch);
curl_close($ch);
echo $response;
// $data = json_decode($response , true);

// echo $data["status"]."<br>";
// echo $data["msg"]."<br>";