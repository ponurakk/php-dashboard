<?php
ob_end_clean();

$db = new Database();
$vehicles = $db->getVehicle();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($vehicles);
