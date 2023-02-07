<?php
    include __DIR__ . '/Models/Product.php';
    include __DIR__ . '/Models/Animal.php';
    include __DIR__ . '/Models/Accessory.php';
    include __DIR__ . '/Models/Toy.php';
    include __DIR__ . '/Models/Food.php';

    // creo l'array della categoria animali
    $animals = [
        'dog' => new Animal('Cane', '<i class="fa-solid fa-dog"></i>'),
        'cat' => new Animal('Gatto', '<i class="fa-solid fa-cat"></i>'),
        'bird' => new Animal('Uccello', '<i class="fa-solid fa-dove"></i>'),
        'fish' => new Animal('Pesce', '<i class="fa-solid fa-fish"></i>'),
    ];

    // creo l'array dei prodotti da visualizzare
    $products = [
        new Food('Royal Canin Mini Adult', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/crocchette/per/cani/3/400/icon_topseller_1_2022_02_24t120049_096_3.jpg', '400g', $animals['dog'], ['prosciutto, riso']),
        new Food('Almo Nature Holistic Maintenance Medium Large Toono e Riso', 44.99, 'https://picsum.photos/200', '600g', $animals['dog'], ['manzo, creali']),
        new Food('Almo Nature Cat Daily Lattina', 34.99, 'https://picsum.photos/200', '400g', $animals['cat'], ['tonno, pollo, prosciutto']),
        new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'https://picsum.photos/200', '30g', $animals['fish'], ['Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe']),
        new Accessory('Voliera Wilma in Legno', 184.99, 'https://picsum.photos/200', 'N/D', $animals['bird'], 'Legno', 'M: L83 x P67 x H153'),
        new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'https://picsum.photos/200', 'N/D', $animals['fish'], 'Materiale espanso', 'N/D'),
        new Toy('Kong Classic', 13.49, 'https://picsum.photos/200', 'N/D', $animals['dog'], 'Galleggia e rimbalza', '8,5cm x 10cm'),
        new Toy('Topini di Pelushe Trixie', 4.99, 'https://picsum.photos/200', 'N/D', $animals['cat'], 'Morbido', '8,5cm x 10cm')
    ];

?>