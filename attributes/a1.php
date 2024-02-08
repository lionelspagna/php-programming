<?php
#[\Foo\say\param("Bau")]
#[Fruit]
#[Red]
#[Cat]
class Foo 
{
    public function __construct(public int $bau = 0) 
    {

    }

    #[\Foo\say\param("string")]
    public function say(string $word) 
    {
        echo $word;
    }

    public function description() {}
}

$foo = new Foo;

$reflect = new ReflectionObject($foo);

$attribs = $reflect->getAttributes();
/*
var_dump($attribs);

foreach($attribs as $obj) {
    echo "\n".$obj->getName()."\n";
}
*/
print_r(array_map(fn($attribute) => $attribute->getName(), $attribs));