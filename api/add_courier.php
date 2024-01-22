<?php
ob_end_clean();
$entity = json_decode(file_get_contents("php://input"), true);

$db = new Database();
$db->addCourier($entity["name"], $entity["lastname"], $entity["phone_number"], $entity["hours_from"], $entity["hours_to"], intval($entity["department_id"]));
header('Content-Type: application/json; charset=utf-8');
