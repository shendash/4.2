
<?
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_SERVER["CONTENT_TYPE"] == 'application/json') {
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($data);
}
?>