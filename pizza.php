
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
        // methode guetter

    public function getIngredients(){
        return $this->ingredient1.','.$this->ingredient2.','.$this->ingredient3;
    }

    public function getBase(){
        return $this->base;
    }

    public function getSize(){
        return $this->size;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getOrderedAt(){
        return $this->orderedAt->format('d/m/Y - H:i:s');
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


$pizzaGet = new pizza('m','blache', 'poulet', 'champignon','aubergine');

?>


  <!-- affichage avec getter -->

<p><?php echo $pizzaGet->getSize();?></p>
<p><?php echo $pizzaGet->getBase();?></p>
<p> <?php echo $pizzaGet->getIngredients(); ?> </p>
<p><?php echo $pizzaGet->getPrice();?></p>
<p><?php echo $pizzaGet->getOrderedAt();?></p>







