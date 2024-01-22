<?php
ob_end_clean();

$db = new Database();
$departments = $db->getDepartments();

header('Content-Type: application/json; charset=utf-8');
echo json_encode($departments);
