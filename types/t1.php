<?php

$type1 = (int)1;
$type2 = (int)1;

if($type1 == $type2) {
    echo "Values are equal \n";
}

if($type1 === $type2) {
    echo "Types are equal \n";
} else {
    echo "Types are not equal \n";
}

