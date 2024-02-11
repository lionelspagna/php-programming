<?php
$requestMethod = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$requestPath = $_SERVER['REQUEST_URI'] ?? '/';

$routes = [
  'GET' => [
    '/' => fn() => print
        <<<HTML
            <!doctype html>
            <html lang=en>
                <body>
                    <p>
                        Hello world, this is home page
                    </p>
                </body>
            </html>
        HTML
    ]  
];

if(isset($routes[$requestMethod][$requestPath])) {
    //call mapped function
    $routes[$requestMethod][$requestPath]();
} else {
    echo __DIR__."<br />";
    include(__DIR__ . '/includes/404.php');
}