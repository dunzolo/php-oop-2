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
            <div class="row d-flex">
                <?php foreach($array_foods as $food) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" alt="card-image-top" src="<?php echo $food->image ?>">
                            <div class="card-body">
                                <h3><?php echo $food->title ?></h3>
                                <p class="card-text"><i class="<?php echo $food->icon?>"></i><?php echo $food->name?></p>
                                <p class="card-text"><?php echo "Prezzo: ".$food->price ?></p>
                                <p class="card-text"><?php echo "Peso netto: ".$food->weight ?></p>
                                <p class="card-text"><?php echo "Peso netto: ".$food->ingredient ?></p>
                            </div>
                        </div>                            
                    </div>
                <?php } ?>
                <?php foreach($array_accessories as $accessories) { ?>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" alt="card-image-top" src="<?php echo $accessories->image ?>">
                            <div class="card-body">
                                <h3><?php echo $accessories->title ?></h3>
                                <p class="card-text"><i class="<?php echo $accessories->icon?>"></i><?php echo $accessories->name?></p>
                                <p class="card-text"><?php echo "Prezzo: ".$accessories->price ?></p>
                                <p class="card-text"><?php echo "Peso netto: ".$accessories->weight ?></p>
                                <p class="card-text"><?php echo "Materiale: ".$accessories->material ?></p>
                                <p class="card-text"><?php echo "Dimensioni: ".$accessories->dimension ?></p>
                            </div>
                        </div>                            
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>