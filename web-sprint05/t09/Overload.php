<?php
    class Overload{
        private $data = array();
        public function __set($name, $value){
            return $this->data[$name] = $value;
        }
        public function __get($name){
            if (array_key_exists($name, $this->data)){
                return $this->data[$name];
            }
            return $this->data[$name] = "NO DATA";
        }
        public function __isset($name){
            if (array_key_exists($name, $this->data)){
                isset($this->data[$name]);
            }
            return $this->data[$name] = "NOT SET";
        }
        public function __unset($name){
            if (array_key_exists($name, $this->data)){
                unset($this->data[$name]);
            }
            return $this->data[$name] = NULL;
        }
    }
?>