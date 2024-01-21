<?php
ob_end_clean();

header('Content-Type: application/json; charset=utf-8');
echo json_encode(["name" => "God", "age" => 10]);

$input_data = json_decode(file_get_contents('php://input'),true);
$baza = mysqli_connect(Hostname, Username, Password, DatabaseName); 
$stms = mysqli_prepare($baza,"SELECT name, lastname, phone_number, hours_from, hours_to, department_id FROM couriers");
mysqli_stmt_bind_param($stms,"s",$input_data);
mysqli_stmt_execute($stms);
mysqli_stmt_bind_result($stms,$w1);
while(mysqli_stmt_fetch($stms)){
    $array = array($w1);
    $data = json_encode($array);
    echo $data; 
}
