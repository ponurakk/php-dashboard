<?php
ob_end_clean();

header('Content-Type: application/json; charset=utf-8');
echo json_encode(["name" => "God", "age" => 10]);
