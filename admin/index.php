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
        <!-- <link rel="stylesheet" href="../css/styles.css"> -->
        <script src="script.js"></script>
    </head>
    
    <body>
        <h1 class="text-logo"><span class="bi-shop"></span> Pokedex <span class="bi-shop"></span></h1>
        <div class="container admin">
            <div class="row">
                <h1><strong>Pokemons   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="bi-plus"></span> Ajouter</a></h1>
                <table id ="tableauPokemons" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Image</th>
                      <th onClick="triTableau('nom')">Nom-tri par clic</th>
                      <th>Type-tri par clic</th>
                      <th>Competence-tri par clic</th>
                      <th>Taille-tri par clic</th>
                      <th>Poids-tri par clic</th>
                      <th>Attack-tri par clic</th>
                      <th>Défense-tri par clic</th>
                    </tr>
                  </thead>
                  <tbody>


<?php

require 'database.php';
$yoan = Database::getPokemonAdmin();

while ($item = $yoan->fetch()) {
    echo '<tr>';
    echo '<td><img src="../images/' . $item['img_poke'] . '"></td>'; // Correction ici
    echo '<td>' . $item['nom'] . '</td>';
    echo '<td>' . $item['type'] . '</td>';
    echo '<td>' . $item['competence'] . '</td>';
    echo '<td>' . $item['taille'] . '</td>';
    echo '<td>' . $item['masse'] . '</td>';
    echo '<td>' . $item['attack'] . '</td>';
    echo '<td>' . $item['defence'] . '</td>';
    echo '</tr>';
  };
// var_dump ($yoan->fetchAll());
  

  // $montableau = array("p.nom", "p.competence", "p.taille", "p.masse");
// 	sort($montableau, SORT_NATURAL | SORT_FLAG_CASE);
// 	foreach ($montableau as $key => $val) {
// 		echo "montableau[" . $key . "] = " . $val . "</br>\n";

//         return $montableau;

                      
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
