<?php

header("Constant-Type: application/json");

$response = ["status" => "ok" ,"msg" => "hello my friend"];



echo json_encode($response);

?>