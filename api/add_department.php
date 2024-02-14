<?php
ob_end_clean();
$entity = json_decode(file_get_contents("php://input"), true);

$db = new Database();
$db->addDepartment($entity["name"], $entity["street"], $entity["home_number"], $entity["locale_number"], $entity["post_code"], $entity["city"], $entity["phone_number"], $entity["email"]);
header('Content-Type: application/json; charset=utf-8');
