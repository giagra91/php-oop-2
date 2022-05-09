<?php

include_once __DIR__ . "/classes/Food.php";
include_once __DIR__ . "/classes/Toy.php";
include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/CreditCard.php";


echo "<h2>Croccantini</h2>";
$croccantini = new Food("500 grammi", "01/04/2023", "croccantini", "Food", 4.90, "Cat");
var_dump($croccantini);

echo "<h2>Giocattolo per cani</h2>";
$dogToy = new Toy("Osso per cani", "1kg", "10x10x10", "Toy", 4.90, "Dog");
var_dump($dogToy);

echo "<h2>Carta di credito</h2>";
$card = new CreditCard("1234567890123456", 2023, 456, "Intesa", 150);
var_dump($card);

// echo "<h2>Carrello</h2>";
// $newCart = new Cart;
// $newCart->addToUserCart($dogToy);
// var_dump($newCart);
// $newCart->deleteFromUserCart($dogToy);
// var_dump($newCart);

echo "<h2>Utente 1</h2>";
$giorgio = new User("Giorgio", "Giovanni", 1990,  "g.g@gmail.com", "giorgiog22", true, $card, 0);
var_dump($giorgio);

echo "<h2>Esito acquisto</h2>";
echo $giorgio->buyProduct($croccantini);

echo "<h2>Utente 2</h2>";
$luca = new User("Luca", "Rossi", 1999,  "luca.rossi@gmail.com", "luca99", false, $card, 0);
var_dump($luca);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php oop 2</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>