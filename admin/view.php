<?php

$img_poke = $_GET['img_poke'];

require 'database.php';
$theo = Database::getPokemonById($_GET['img_poke']);


?>

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
      <link rel="stylesheet" href="../css/styles.css">
    </head>
    
    <body>
      <h1 class="text-logo"><span class="bi-shop"></span> Pokedex <span class="bi-shop"></span></h1>
      <div class="container admin">
        <div class="row">
          <div class="col-md-6">
            <h1><strong>Voir un Pokemon</strong></h1>
            <br>
            <form>
              <div>
                <label>Nom:</label><?php echo '  '.$theo['name'];?>
              </div>
              <br>
              <div>
                <label>Description:</label><?php echo '  '.$theo['description'];?>
              </div>
              <br>
              <div>
                <label>Prix:</label><?php echo '  '.number_format((float)$theo['price'], 2, '.', ''). ' €';?>
              </div>
              <br>
              <div>
                <label>Catégorie:</label><?php echo '  '.$theo['CatName'];?>
              </div>
              <br>
              <div>
                <label>Image:</label><?php echo '  '.$theo['image'];?>
              </div>
            </form>
            <br>
            <div class="form-actions">
              <a class="btn btn-primary" href="index.php"><span class="bi-arrow-left"></span> Retour</a>
            </div>
          </div>
          <div class="col-md-6 site">
            <div class="img-thumbnail">
              <img src="<?php echo '../images/'.$theo['image'];?>" alt="...">
              <div class="price"><?php echo number_format((float)$theo['price'], 2, '.', ''). ' €';?></div>
              <div class="caption">
                <h4><?php echo $theo['name'];?></h4>
                <p><?php echo $theo['description'];?></p>
                <a href="#" class="btn btn-order" role="button"><span class="bi-cart-fill"></span> Commander</a>
              </div>
            </div>
          </div>
        </div>
      </div>   
    </body>
</html>



