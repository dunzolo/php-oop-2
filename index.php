<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>PHP OOP2</title>
    </head>
    <body>
    <div class="container">
            <h1 class="text-center mt-3">Boolshop</h1>
            <div class="row d-flex mt-5">
                <h2>I nostri prodotti</h2>
                <?php foreach($products as $product) { ?>
                    <div class="col-4 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top p-5" alt="card-image-top" src="<?php echo $product->image ?>">
                            <div class="card-body">
                                <h3><?php echo $product->title ?></h3>
                                <p class="card-text"><?php echo $product->animal->icon." ".$product->animal->name; ?></p>
                                <p class="card-text"><?php echo "Prezzo: €".$product->price; ?></p>
                                <p class="card-text"><?php echo "Peso netto: ".$product->weight ?></p>
                                <?php if(get_class($product) == 'Food'){ ?>
                                    <p class="card-text"><?php echo "Ingredienti: ".implode(", ", $product->ingredient); ?></p>
                                <?php } ?>
                                <?php if(get_class($product) == 'Accessory'){ ?>
                                    <p class="card-text"><?php echo "Materiale: ".$product->material ?></p>
                                    <p class="card-text"><?php echo "Dimensioni: ".$product->dimension ?></p>
                                <?php } ?>
                                <?php if(get_class($product) == 'Toy'){ ?>
                                    <p class="card-text"><?php echo "Caratteristiche: ".$product->characteristics ?></p>
                                    <p class="card-text"><?php echo "Dimensioni: ".$product->dimension ?></p>
                                <?php } ?>
                            </div>
                        </div>                            
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>