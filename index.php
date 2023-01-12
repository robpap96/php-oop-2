<?php

require_once __DIR__ . "/products_db/db.php";

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pet Shop</title>
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <!-- ///BOOTSTRAP -->
        <!-- FONTAWESOME -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- ///FONTAWESOME -->
    
    </head>
    <body>  
        <section class="product-cards">
            <div class="container p-4">
                <div class="row">
                    <?php foreach ($products as $product) {?>
                    <div class="col-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <img src="<?php echo $product->image ?>" alt="<?php echo $product->name ?>" width="100%">
                                <h4 class="card-title"><?php echo $product->name; ?></h4>
                                <div class="category-icon">
                                    <h4 class="card-title"><?php echo $product->category->icon; ?></h4>
                                </div>
                                <h4 class="card-title"><?php echo $product->price; ?> €</h4>

                                <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </section>

    </body>
</html>