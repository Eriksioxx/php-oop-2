<?php 
/* L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi
e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta. */

require_once __DIR__ . '/classes/Product.php';
require_once __DIR__ . '/classes/Buyer.php';
require_once __DIR__ . '/classes/CreditCard.php';
require_once __DIR__ . '/classes/Food.php';

$carne = new Food('carne', 'carne in scatola', 11.49, ['pollo', 'vitello','coniglio'], '16/05/2024');
$cartaDiCredito = new CreditCard (1236547896548745, 2024, 15.99);
$acquirente = new Buyer ('Erik', 'Schievenin', 32, true, $cartaDiCredito);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-oop-2</title>
</head>
<body>
    <h2>PHP-OOP-2</h2>
    <?php

        var_dump($carne);
        var_dump($cartaDiCredito);
        var_dump($acquirente);
        echo ($acquirente->buyNewProduct($carne));


    ?>
</body>
</html>