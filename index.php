<!DOCTYPE html>
<html>
    <head>
        <title>Pokedex</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <div class="container site">
           
            <h1 class="text-logo"><span class="bi-shop"></span> Pokedex <span class="bi-shop"></span></h1>
            
            <?php

                echo '<nav> <ul class="nav nav-pills role"tablist">';

                require 'admin/database.php';

                $db = Database::connect();


                //$Louis = Database::RechercheCategory();



                // foreach ($Louis as $category){
                //     if($category['id'] == 1){
                //     echo '<li class="nav-item" role="presentation"><a class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab'. $category['id'] . '" role="tab">' . $category['name'] . '</a></li>';
                // } else {
                //     echo '<li class="nav-item" role="presentation"><a class="nav-link " data-bs-toggle="pill" data-bs-target="#tab'. $category['id'] . '" role="tab">' . $category['name'] . '</a></li>';
                // }
                // }


                // echo '</ul> </nav>';

                // echo '<div class="tab-content" >';

                // foreach ($Louis as $category){
                //     if ($category['id'] == 1) {
                //         echo '<div class="tab-pane active" id="tab' . $category['id'] .'" role="tabpanel">';
                //     }
                //     else {
                //         echo '<div class="tab-pane" id="tab' . $category['id'] .'" role="tabpanel">';
                //     }

                //     echo '<div class="tab-content">';

                    
                //     $ryan = Database::RechercheItemByCategory($category['id']);

                //     while ($item = $ryan->fetch()) {
                //         echo '<div class="col-md-6 col-lg-4">
                //         <div class="img-thumbnail">
                //             <img src="images/' . $item['image'] . '" class="img-fluid" alt="...">
                //             <div class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                //             <div class="caption">
                //                 <h4>' . $item['name'] . '</h4>
                //                 <p>' . $item['description'] . '</p>
                //                 <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
                //             </div>
                //         </div>
                //     </div>';
                //     }

                //     echo '</div> </div>';

                // }

                // echo'</div>';

                Database::disconnect();



                // connexion bdd




                // affcihage des categories

                // affcihage des produits

            ?>

        </div>
    </body>
</html>