<?php

class order {
    public $status;

    private $totalPrice;

    private $productQty;

    private $id;

    private $customer;

    function __construct($customerName){
        $this->status = "en cours";
        $this->totalPrice = 0;
        $this->productQty = 0;
        $this->id = uniqid();
        $this->customer = $customerName;
    }

    public function pay() {
        if($this->status === "en cours" && $this->status !== "annulé" && $this->totalPrice > 0 && $this->productQty > 0){
            $this->status = "payé";
        }
    }

    public function cancel(){
        if($this->status === "en cours" && $this->status !== "annulé" && $this->status !== "payé"){
            if($this->totalPrice > 0 && $this->productQty > 0){
            $this->status = "annulé";
            }
        }    
    }

    public function addProduct(){
        if($this->status === "en cours" && $this->status !== "annulé" && $this->status !== "payé"){
        $this->productQty = $this->productQty + 1;
        $this->totalPrice = $this->totalPrice + 10;
        }
    }

    public function removeProduct(){
        if($this->status === "en cours" && $this->productQty > 0 && $this->totalPrice > 0){

                $this->productQty = $this->productQty - 1;
                $this->totalPrice = $this->totalPrice - 10;

        }
    }  
}

$order = new order('Yassine');


// $order->cancel();
// $order->addProduct();
// $order->addProduct();
// $order->addProduct();
// $order->addProduct();

$order->pay();
// $order->addProduct();

var_dump($order);


// $order2 = new Order();

// $order2->addProduct();
// $order2->pay();
// $order2->removeProduct();

// var_dump($order2);

