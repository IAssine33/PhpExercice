<?php

class vendorMachine{

    private $snacks;

    private $cashAmount;
    
    private $isOn;



     function __construct(){

        $this->snacks = [
            [
                "name" => "Snickers",
                "price" => 1,
                "quantity" => 5
            ],
            [
                "name" => "Mars",
                "price" => 1.5,
                "quantity" => 5
            ],
            [
                "name" => "Twix",
                "price" => 2,
                "quantity" => 5
            ],
            [
                "name" => "Bounty",
                "price" => 2.5,
                "quantity" => 5
            ]
        ];

        $this->cashAmount = 0;
        $this->isOn = true;

    }

    public function turnOn(){
        //allumer la machine
        $this->isOn = true;

    }

    public function turnOff(){

        // récupère l'heure actuelle (avec date ou DateTime)
        $date = new DateTime();

        
        // si l'heure > 18
        if(($date->format("h") +2) > 18){
             // on éteint
        $this->isOn = false;
        }
       

    }

    public function buySnack($snackName){
        if( $this->isOn = true ){
            foreach($this->snacks as $key => $snack){
                if($snack["name"] === $snackName && $snack > 0){
                    // même chose que $this->snacks[$key]['quantity'] -= 1                  //version courte
                    $this->snacks[$key]['quantity'] = $this->snacks[$key]['quantity']  -1 ; //version longue
                    $this->cashAmount = $this->cashAmount + $snack["price"];

                }
            }
        }

    }

    public function shootWithFoot(){
        if($this->isOn = true){
            foreach($this->snacks as $key => $snack){

            }
        }
    }

}

$vendorMachine = new vendorMachine();

$vendorMachine->turnOff();

//$vendorMachine->buySnack("Twix");

var_dump($vendorMachine);