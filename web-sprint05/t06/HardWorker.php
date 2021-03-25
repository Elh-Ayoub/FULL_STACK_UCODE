<?php 
    class HardWorker{
        private $name;
        private $age;
        private $salary;
        public function getName(){
            return $this->name;
        }
        public function setName($name){
            $this->name = $name;
        }
        public function getAge(){
            return $this->age;
        }
        public function setAge($age){
            if($age >=1 && $age <= 100){
                $this->age = $age;
                return true;
            }else{
                return false;
            }
        }
        public function getSalary(){
            return $this->salary;
        }
        public function setSalary($salary){
            if ($salary >=100 && $salary <= 10000) {
                $this->salary = $salary;
                return true;
            }else{
                return false;
            }
        }
        public function toArray(){
            return array("name" => $this->name, "age" => $this->age, "salary" => $this->salary);
        }
    }
    // $Bruce= new HardWorker();
    // $Bruce->setName("Bruce");
    // echo $Bruce->getName() . "\n";
    // $Bruce->setAge(50);
    // $Bruce->setSalary(1500);
    // print_r($Bruce->toArray());

    // $Bruce->setName("Linda");
    // $Bruce->setAge(140);
    // print_r($Bruce->toArray());
?>