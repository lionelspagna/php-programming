### Liskov Substitution

This is one of the most important solid principle.
When u make substitution of a class with his subclass the behavior doesn't change, what does it mean? Let's have a look.

You have the class

```
class Rectangle
{
    public function __construct(
        private int|float width = 0,
        private int|float height = 0
    ){}

    public function setWidth($width)
    {
        $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}
```

This class receive width and height when creating the object and calculate the area if invoked, the result can be printed with a function

```
function print_area(Rectangle $rectangle)
{
    $rectangle->setWidth(4);
    $rectangle->setHeight(5);
    echo $rectangle->area();
}

$rectangle = new Rectangle();
print_area($rectangle);
```

This example print number 20 on the screen, this is right for rectangle. Now suppose to create Square class.

```
class Square extends Rectangle
{
    public function setWidth($width) {
        $this->width = $width;
        $this->height = $width;
    }

    public function setHeight($height) {
        $this->height = $height;
        $this->width = $height;
    }
}
```

Now we are going to use the print_area function with square object

```
$square = new Square();
print_area($squadre);
```
The output will be 25, this what we don't expect for a square and this result don't adheres to liskov principle


