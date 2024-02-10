<?php
echo "getenv('PHP_ENV')<textarea>";
var_dump(getenv('PHP_ENV'), $_SERVER, $REQUEST);
echo "</textarea><br />";

echo "\$_SERVER<textarea>";
var_dump($_SERVER);
echo "</textarea><br />";

echo "\$_REQUEST<textarea>";
var_dump($_REQUEST);
echo "</textarea>";

