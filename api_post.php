<?php

header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"] === "POST"){

$rawData = file_get_contents("php://input");

$data = json_decode($rawData , true);

if(isset($data['name']) && isset($data['job'])){

echo json_encode([
    "status" => "ok",
    "msg" => $data['name'] . "شغل : " . $data['job']

], JSON_UNESCAPED_UNICODE);

}else{

    echo json_encode([
        "status" => "error",
        "msg" => "نام یا شغل رو بفرست لعنتی"
    ], JSON_UNESCAPED_UNICODE);

}

}