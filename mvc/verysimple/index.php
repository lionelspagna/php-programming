<?php
//FRONT CONTROLLER

//global libraries
require_once 'model.php';
require_once 'controllers.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

function page_not_found(string $html = ''): string {
    header('HTTP/1.1 404 Not Found');
    $notFoundHtml = "<html><body><p>Page not found</p></body></html>";
    if($html === '') echo $notFoundHtml;
    return $notFoundHtml;
}

match($uri) {
    '/index.php' => list_action(),
    ('/index.php/show' && isset($_GET['id'])) => show_action($_GET['id']),
    'default' => page_not_found()
};