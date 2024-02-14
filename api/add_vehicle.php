<?php
ob_end_clean();
$entity = json_decode(file_get_contents("php://input"), true);

$db = new Database();
print_r($entity);
$db->addVehicle($entity["brand"], $entity["model"], $entity["registration"], $entity["capacity"],  intval($entity["department_id"]));
header('Content-Type: application/json; charset=utf-8');
