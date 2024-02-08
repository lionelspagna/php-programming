<?php
declare(strict_types=1);

define('COSTANT', 'Bau');

echo COSTANT;

class Test {
    public function __construct(
        //property promotion
        public int $id, 
        public string $token = '',
        public string $name = ''
    )
    {}
}

static $test = new Test(55);

var_dump($test);