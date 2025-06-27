<?php

// header("Constant-Type: application/json");

// $response = ["status" => "ok" ,"msg" => "hello my friend"];



// echo json_encode($response);


header("Constant-Type: application/json");

if(isset($_GET['name']) && isset($_GET['job'])){

    $name = $_GET['name'];
    $job = $_GET['job'];

    $response = ["status"=>"ok","msg"=>"اطلاعات دریافت شد","data"=>["name"=>"$name
    ", "job"=>"$job"]];

}else{
    $response = ["status"=>"error","msg"=>"مقدار های کوفتی رو پر کن","data"=>["name"=>"خالی
    ", "job"=>"خالی"]];
}

echo json_encode($response , JSON_UNESCAPED_UNICODE);
?>