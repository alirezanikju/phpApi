<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://localhost/Api/api.php");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response , true);

echo $data["status"];
echo "<br>";
echo $data["msg"];