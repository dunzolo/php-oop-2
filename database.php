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
        new Food('Royal Canin Mini Adult', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/royal/canin/mini/adult/umido/in/salsa/per/cani/6/400/83013_pla_royalcanin_mini_adultpouch_85_6.jpg', '400g', $animals['dog'], ['prosciutto, riso']),
        new Food('Almo Nature Holistic Maintenance Medium Large Toono e Riso', 44.99, 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/holistic/medium/adult/con/agnello/fresco/3/400/26699_pla_almo_nature_holistic_adult_lamm_reis_medium_741_12kg_dog_3.jpg', '600g', $animals['dog'], ['manzo, creali']),
        new Food('Almo Nature Cat Daily Lattina', 34.99, 'https://shop-cdn-m.mediazs.com/bilder/almo/nature/daily/x/g/9/400/62856_pla_almo_nature_daily_menu_kalb_hs_04_9.jpg', '400g', $animals['cat'], ['tonno, pollo, prosciutto']),
        new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'https://www.animalhouseitalia.it/14689-large_default/tetra-guppy-colour-250-ml-75gr-mangime-per-pesci-acquario.jpg', '30g', $animals['fish'], ['Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe']),
        new Accessory('Voliera Wilma in Legno', 184.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg?v=1760290610', 'N/D', $animals['bird'], 'Legno', 'M: L83 x P67 x H153'),
        new Accessory('Cartucce Filtranti per Filtro EasyCrystal', 2.29, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg?v=1762132134', 'N/D', $animals['fish'], 'Materiale espanso', 'N/D'),
        new Toy('Kong Classic', 13.49, 'https://shop-cdn-m.mediazs.com/bilder/kong/classic/2/400/46452_pla_kong_classic_hs_01_2.jpg', 'N/D', $animals['dog'], 'Galleggia e rimbalza', '8,5cm x 10cm'),
        new Toy('Topini di Pelushe Trixie', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/topolino/in/peluche/trixie/con/catnip/2/400/26383_PLA_Trixie_Plueschmaus_mit_Catnip_Katzenspielzeug_7_cm_2.jpg', 'N/D', $animals['cat'], 'Morbido', '8,5cm x 10cm')
    ];

?>