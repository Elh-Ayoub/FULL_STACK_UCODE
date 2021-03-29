<?php
    class Ingestion{
        public $id;
        public $meal_type = array();
        public $day_of_diet;
        private $products = array();
        public function __construct($meal_type ,$id)
        {
            $this->meal_type = $meal_type;
            $this->id = $id;
        }
        public function get_from_fridge($product){
            if($this->products[$product]->getKcal() > 200){
                throw new EatException("No more junk food, dumpling!");
            }
        }
        public function setProduct($product){
            $this->products[$product->getName()] = $product;
        }
        public function getProducts(){
            return $this->products;
        }
    }
?>