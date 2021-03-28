<?php
    class Team{
        public $id;
        public $avengers = array();
        public function __construct($id, $avengers){
            $this->id = $id;
            $this->avengers = $avengers;
        }
        function battle($damage) {
            $lenght = count($this->avengers);
            for($i = 0; $i < $lenght; $i++){
                $this->avengers[$i]->hp -= $damage;
                if($this->avengers[$i]->hp <= 0){
                    unset($this->avengers[$i]);
                    array_values($this->avengers);
                }
            }
        }
        function calculate_losses($cloned_team){
            $lenght1 = count($this->avengers);
            $lenght2 = count($cloned_team->avengers);
            if($lenght2 - $lenght1  < 0){
                $def = ($lenght2 - $lenght1)*-1;
            }else{
                $def = ($lenght2 - $lenght1);
            }
            if($lenght2 === $lenght1){
                echo "We haven't lost anyone in this battle!";
            }else{
                
                echo "In this battle we lost " . $def . " Avenger(s).";
            }
        }
    }
?>