<?php

class MyClass 
{
//property promotion with ? null
	public function __construct(private ?string $name = null) 
	{
	//coalescing operator, if null use 'Empty' instead
		echo $name ?? "Empty! \n";
	}
	
	//with : ?string returned value of function can be null
	public function getName(): ?string
	{
		if($this->name != null) return $this->name;
		return null;
	}
	
	public function setName(?string $name): void
	{
		$this->name = $name ? 'Not supplied name' : $name;
	}
}

$myClass = new MyClass();

echo $myClass->getName();
$myClass->setName(name: null);

