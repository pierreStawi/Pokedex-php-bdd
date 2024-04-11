<?php

class Database {

    private static $dbHost = "localhost";
    private static $dbName = "pokedex";
    private static $dbUsername = "root";
    private static $dbUserpassword = "";
    private static $connection = null;
    
    public static function connect() {
        if(self::$connection == null) {
            try {
              self::$connection = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName , self::$dbUsername, self::$dbUserpassword);
            }
            catch(PDOException $e) {
                die($e->getMessage());
            }
        }

        return self::$connection;
    }


    public static function getPokemonById(){
        $db = Database::connect();
        $rida = $db->prepare ("SELECT p.img_poke FROM pokemon AS p");
        $rida->execute(array($img_poke));
        $clavier = $rida->fetch();
        return $clavier;
    }



    // public static function RechercheCategory(){

    //     $db = Database::connect();
    //     $statement = $db->query("SELECT * FROM categories");
    //     $categories = $statement->fetchAll();

    //     return $categories;

    // }

public Static function getPokemonAdmin(){
    $db = Database::connect();
    $mamadou = $db->query("SELECT p.img_poke, p.nom, p.competence, p.taille, p.masse, p.attack, p.defence FROM pokemon AS p");

    return $mamadou;


}



    // public static function RechercheItemByCategory($id){

    //     $db = Database::connect();
    //     $toto = $db->prepare("SELECT* FROM items WHERE category = ?");
    //     $toto->execute(array($id));

    //     return $toto;

    // }


    public static function disconnect() {
        self::$connection = null;
    }
}
?>


