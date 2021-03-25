<?php 
    class Tower extends Building{
        private $elevator;
        private $arc_capacit;
        private $height;

        public function hasElevator() : bool{
            return $this->elevator;
        }
        public function setElevator($elevator){
            $this->elevator = $elevator;
        }
        public function getArcCapacity() : int{
            return $this->arc_capacit;
        }
        public function setArcCapacity($arc_capacit){
            $this->arc_capacit = $arc_capacit;
        }
        public function getHeight() : float{
            return $this->height;
        }
        public function setHeight($height){
            $this->height = $height;
        }
        public function getFloorHeight(){
            return ($this->height / $this->floors);
        }
    }

?>