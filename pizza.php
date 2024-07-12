
<?php
class pizza {

    private $size;

    private $price;

    private $base;


    private $ingredient1;

    private $ingredient2;

    private $ingredient3;


    private $status;

    private $orderedAt;

    // ?partie  methode constructeur 
    function __construct($size, $base, $ingredient1, $ingredient2, $ingredient3){

        $this-> status = "En cours de commande";

        $this-> size = $size;
        $this-> price = 0;
        $this-> base = $base;
        $this-> ingredient1 = $ingredient1;
        $this-> ingredient2 = $ingredient2;
        $this-> ingredient3 = $ingredient3;
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


    // la fonction de livraison de paiment
    public function pay() {

        if ($this->status === "En cours de commande"){
            $this->status = "payé";
        }
    }

    // la fonction de livraison
    public function ship(){
        if ($this->status === "payé"){
            $this->status = "livré";
        }
    }


}

// choix de la taille et des ingredients de ma pizza
$pizzaYass = new pizza('l','tomate', 'enchois', 'champignon','roket');

// paiment de ma pizza
$pizzaYass->pay();

// livraison de ma pizza
$pizzaYass->ship();

// affichage
var_dump($pizzaYass);