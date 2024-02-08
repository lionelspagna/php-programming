<?php

function test(mixed $mixed): string
{
    var_dump($mixed);
    return $mixed."\n";
}

echo test("Hello");