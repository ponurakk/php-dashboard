<?php
ob_end_clean();

$entity = json_decode(file_get_contents("php://input"), true);
print_r($entity);

$db = new Database();
$db->removeDepartment(intval($entity["id"]));

header('Content-Type: application/json; charset=utf-8');