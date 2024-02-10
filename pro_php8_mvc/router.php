<?php

//router to route php pages
$requestPath = $_SERVER['SCRIPT_NAME'];
echo "<textarea>";print_r($_SERVER);echo "</textarea><br />";
//read php yaml file or use annotation will be better
$urlPathController = match($requestPath) {
    '/blog' => 'blogController',
    default => '404 Page not found'
};

print_r($urlPathController);