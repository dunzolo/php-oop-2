<?php
    include __DIR__ . '/Models/Products.php';
    include __DIR__ . '/Models/Animals.php';
    include __DIR__ . '/Models/Accessories.php';
    include __DIR__ . '/Models/Toys.php';
    include __DIR__ . '/Models/Food.php';

    echo "<pre>";

    $product = new Products('titolo', 'prezzo', 'immagine', 'peso');
    var_dump($product);

    $animal = new Animals('titolo', 'prezzo', 'immagine', 'peso','Cane', 'icona');

    var_dump($animal);

    $food = new Food('titolo', 'prezzo', 'immagine', 'peso','Cane', 'icona','ingrediente');

    var_dump($food);
?>