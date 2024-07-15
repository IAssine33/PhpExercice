
<?php require_once("./meal.php") ?>

<?php
class hotDog extends meal {

    private $bread;


    // ?partie  methode constructeur 
    function __construct($size, $bread){

        $this-> status = "Commande en cours";

        $this-> size = $size;
        $this-> price = 0;
        $this-> bread = $bread;
        $this-> orderedAt = new dateTime("now");

         // les condition du prix par rapport au taille 
         if ($this-> size === 's'){
            $this-> price = 8;
        }

        if ($this-> size === 'm'){
            $this-> price = 10;
        }

        if ($this-> size === 'l'){
            $this-> price = 13;
        }
    }


    

}

// choix de la taille et du pain de mon Hot Dog
$hotDogYass = new hotDog('l','Pain complet');

// paiment de mon Hot Dog
$hotDogYass->pay();

// livraison de mon Hot Dog
$hotDogYass->ship();

// affichage
var_dump($hotDogYass);