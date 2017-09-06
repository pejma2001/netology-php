<?php
class Car
{
    public $name;
    public $color;
    public $price;

    public function getPrice()
   {
    return $this->price;
   }

}
$Honda = new Car();
$Honda->name='HR-V';
$Honda->color='red';
$Honda->price=700000;
echo $Honda->name;
echo '<pre>';
echo $Honda->getPrice();
echo '</pre>';

$Toyota = new Car();
$Toyota->name='Land Cruiser Prado';
$Toyota->color='blue';
$Toyota->price='1800000';
echo $Toyota->name;
echo '<pre>';
echo $Toyota->getPrice();
echo '</pre>';

?>
_____
<?php
class TV
{
    public $name;
    public $price;

    public function simpleMethod(){
        $this->price=100000;
    }


}
$Sony=new TV;
$Sony->name='Bravia';
$Sony->price=120000;


$Samsung=new TV;
$Samsung->name='Atlas';
$Samsung->price=30000;

echo '<pre>';
echo $Sony->name;
echo '</pre>';
echo '<pre>';
echo $Sony->price;
echo '</pre>';

echo $Samsung->name;
$Samsung->simpleMethod();
echo '<pre>';
echo $Samsung->price;
echo '</pre>';
?>
_____
<?php

class Pen
{
    public $color='blue';
    public $wheight;
    public $size;

    public function changeColor($color)
    {
        $this->color=$color;
    }
}
$object=new Pen();
$object->changeColor('red');
echo '<pre>';
echo $object->color;
echo '</pre>';

$objectAnother=new Pen();
echo '<pre>';
echo $objectAnother->color;
echo '</pre>';
?>
_____
<?php


class Duck
{
    public $name;
    public $color;
    public $size;

    public function __construct($name, $color, $size)
{
    $this->name=$name;
    $this->color=$color;
    $this->size=$size;
}

        public function setSize($size)
    {
        $this->size = $size;
    }

}

$kind = new Duck('Wild', 'grey', 'big');
$anotherKind = new Duck('Home', 'black and white', 'middle');
echo '<pre>';
$kind->setSize('small');
echo $kind->size;
echo '</pre>';
?>
_____
<?php
class Product
{
    private $price='no price';
    public $name;
    public $color;

    public function __construct($price, $name, $color)
    {
        $this->price=$price;
        $this->name=$name;
        $this->color=$color;
    }

    public function getPrivateProperty($price)
    {
       return $this->price;
    }

}
$Samsung=new Product(24000, 'A7', 'silver');

$Nokia=new Product (19000, 'Lumia 24-12', 'white');

$Nokia->getPrivateProperty();



?>
<?php
class News
{

public function __construct($id, $date)
{
$this->id=$id;
$this->date=$date;

}

public function getNews()
{
}

}
$object=new News('First news', '12th of June 2017');

$objectAnother=new News ('Second news', '25th of Augast 2017');





?>

//(Не обязательно) Если окажется слишком просто - реализуйте класс комментариев
//и создайте метод getComments в классе новостей, в который будете передавать объект с комментариями,
//который будет также их выводить