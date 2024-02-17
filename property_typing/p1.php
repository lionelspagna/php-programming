<?php

declare(strict_types=1);

class Test
{
    public int $id = 0;
}

$test = new Test();
$test->id = 10;
echo $test->id."\n";
?>