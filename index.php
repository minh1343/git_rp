<?php 

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri) {
    case '/students': 
        require './manage_student.php';
        break;
    case '/': 
        require './header.php';
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
}