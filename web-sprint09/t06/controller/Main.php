<?php
include("./ControllerInterface.php");
include("../view/View.php");
    class Main implements ControllerInterface{
        public $view;
        public function __construct($view){
            $this->view = $view;
        }
        public function execute(){
            $this->view->render();
        }
    }
    // $main = new Main(new View("../view/templates/main.html"));
    // $main->execute();
?>