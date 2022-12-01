<?php
//  $obj -> name = 'pooja';
//  $obj -> email = 'gugf@gmail.com';
//  var_dump($obj);


class Fruit {
  public $name;
  public $color;
 
  function setName($x,$y) {
    $this -> name = $x;
    $this -> color = $y;
  }

  function getName() {
    // echo $this -> name;
    // echo $this -> color;
    return array('name' => $this -> name, 'color' => $this -> color);
  }
}

$apple = new Fruit();

$apple -> setName('Apple','red');

// $fruit = $apple -> getName();
// // echo $apple -> name;
// echo $fruit['name'];

echo  'color is: ' . $apple -> getName()['color'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>demo</title>
  </head>
  <body>
  </body>
</html>