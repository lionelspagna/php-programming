<?php

function hello(int $times, string $message): array 
{
    for($i = 1; $i <= $times; $i++ ) echo $message."\n";
    return [];
}

//name arguments
hello(message: "Hello", times: 1);