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

    $product_5 = new Accessories('Voliera Wilma in Legno', '€184,99', 'https://picsum.photos/200', 'N/D', 'Uccello', 'fa-solid fa-dove', 'Legno', 'M: L83 x P67 x H153');
    $product_6 = new Accessories('Cartucce Filtranti per Filtro EasyCrystal', '€2,29', 'https://picsum.photos/200', 'N/D', 'Pesce', 'fa-solid fa-fish', 'Materiale espanso', 'N/D');
    $array_accessories = [$product_5, $product_6];

    $product_7 = new Toys('Kong Classic', '€13,49', 'https://picsum.photos/200', 'N/D', 'Cane', 'fa-solid fa-dog', 'Galleggia e rimbalza', '8,5cm x 10cm');
    $product_8 = new Toys('Topini di Pelushe Trixie', '€4,99', 'https://picsum.photos/200', 'N/D', 'Gatto', 'fa-solid fa-cat', 'Morbido', '8,5cm x 10cm');
    $array_toys = [$product_7, $product_8];

?>