<?php
ob_end_clean();

$db = new Database();
$couriers = $db->getCourier();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($couriers);
