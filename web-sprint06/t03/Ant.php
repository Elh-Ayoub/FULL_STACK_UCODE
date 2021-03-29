<?php
    class Ant
    {
        public $name;
        public $role_in_army;
        public $date_of_entry;
        public $number_of_fights;
        public $number_of_legs;
        public function __construct($name, $role_in_army, $data_of_entry, $number_of_fights, $number_of_legs)
        {
            $this->name = $name;
            $this->role_in_army = $role_in_army;
            $this->date_of_entry = $data_of_entry;
            $this->number_of_fights = $number_of_fights;
            $this->number_of_legs = $number_of_legs;
        }
        public function __wakeup()
        {
            echo "name: " . $this->name . " \n". 
             "role_in_army: " .  $this->role_in_army . "\n" . 
             "date_of_entry: " . $this->date_of_entry . "\n" .
             "number_of_fights: " . $this->number_of_fights . "\n". 
             "number_of_legs: " . $this->number_of_legs . "\n";
        }
    }
?>