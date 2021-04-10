<?php
    class View{
        public $content;
        public function __construct($html){
            $this->content = file_get_contents($html);
        }
        public function render(){
            echo $this->content;
        }
    }
?>