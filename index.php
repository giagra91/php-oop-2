<?php

include_once __DIR__ . "/classes/Food.php";
include_once __DIR__ . "/classes/Game.php";
include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/CreditCard.php";
include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/Cart.php";


$croc = new Food("croc", "500 grammi", "01/04/2023", "Food", 4.90, "Cat");
var_dump($croc);
$gam = new Game("gioco", "5 kg", "10x10x10", "Game", 4.90, "Dog");
var_dump($gam);
$number = new CreditCard("1234567890123456", 2023, 456, "Intesa", 150);
var_dump($number);

$newCart = new Cart;
$newCart->addToUserCart($gam);
var_dump($newCart);
$newCart->deleteFromUserCart($gam);
var_dump($newCart);


$giorgio = new User("Giogio", "Giovanni", 1990,  "g.g@gmail.com", "giorgiog22", true, $number, 0, $newCart);
var_dump($giorgio);

echo $giorgio->buyProduct($croc);

$caro = new User("Giogio", "Giovanni", 1990,  "g.g@gmail.com", "giorgiog22", true, $number, 0);
var_dump($caro);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2</title>
</head>
<body>
    
</body>
</html>