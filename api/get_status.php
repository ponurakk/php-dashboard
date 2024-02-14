<?php
ob_end_clean();

$db = new Database();
$status = $db->getDeliveryStatus();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($status);
