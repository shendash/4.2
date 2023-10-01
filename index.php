<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER["CONTENT_TYPE"] == 'application/json') {
    header('Content-Type: application/json; charset=utf-8');
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    echo json_encode($data);
}
?>