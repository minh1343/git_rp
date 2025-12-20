<?php 

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($uri) {
    case '/delete':
        require './delete.php';
        break;
    case '/students': 
        require './students.php';
        break;
    case '/': 
        require './header.php';
        break;
    default:
        http_response_code(404);
        echo '404 Not Found';
}