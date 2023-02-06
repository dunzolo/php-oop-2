<?php
    include __DIR__ . '/Models/Products.php';
    include __DIR__ . '/Models/Animals.php';
    include __DIR__ . '/Models/Accessories.php';
    include __DIR__ . '/Models/Toys.php';
    include __DIR__ . '/Models/Food.php';

    $product_1 = new Food('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Cane', 'fa-solid fa-dog', 'prosciutto, riso');
    $product_2 = new Food('Almo Nature Holistic Maintenance Medium Large Toono e Riso', '€44,99', 'https://picsum.photos/200', '600g', 'Cane', 'fa-solid fa-dog', 'manzo, creali');
    $product_3 = new Food('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Gatto', 'fa-solid fa-cat', 'tonno, pollo, prosciutto');
    $product_4 = new Food('Mangime per Pesci Guppy in Fiocchi', '€2,95', 'https://picsum.photos/200', '30g', 'Pesce', 'fa-solid fa-fish', 'Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
    $array_foods = [$product_1, $product_2, $product_3, $product_4];

    $product_5 = new Accessories('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Cane', 'icona', 'meteriale', 'legno');
    $product_6 = new Accessories('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Cane', 'icona', 'meteriale', 'legno');
    $array_accessories = [$product_5, $product_6];

    $product_7 = new Toys('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Cane', 'icona', 'caratteristica', 'dimensioni');
    $product_8 = new Toys('Almo Nature Cat Daily Lattina', '€34,99', 'https://picsum.photos/200', '400g', 'Cane', 'icona', 'caratteristica', 'dimensioni');
    $array_toys = [$product_7, $product_8];

?>