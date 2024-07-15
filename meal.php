
<?php
abstract class meal {

    protected $size;

    protected $price;


    protected $status;

    protected $orderedAt;
    
    

    // la fonction de livraison de paiment
    public function pay() {

        if ($this->status === "Commande en cours"){
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