<?php
    class LList implements IteratorAggregate{
        private $first = NULL;
	    private $_count = 0;
        private $head;
        public function __construct(){
            $this->head = new LLItem();
        }
        function getFirst(){
            return $this->first;
        }
        function getLast(){
            $this->head = $this->first;
            while($this->head->next != NULL) {
                $this->head = $this->head->next;
            }
            return $this->head;
        }
        function add($value){
            $newNode = new LLItem($value);
            if($this->first == NULL){
                if ( $this->first != NULL ) {
                $newNode->next = $this->first;
                }
                $this->first = &$newNode;
    
                $this->_count++;
            }else{
                $current = $this->first;
    
                while ($current->next != null) {
                    $current = $current->next;
                }
                $current->next = $newNode;
                $this->_count++;
            }
            return TRUE;
        }
        function addArr($array){
            $length = count($array);
            if ($this->head->data == NULL){
                for($i = 0; $i < $length; $i++){
                    $this->head = $this->add($array[$i]);
                }
                return;
            }
            else{
                while($this->head != NULL) {
                    $this->head = $this->head->next;
                }
                for($i = 0; $i < $length; $i++){
                    $this->head = $this->add($array[$i]);
                }
            }
        }
        function remove($value){
            if ( $this->first !== NULL ) {
                $prev = NULL;
                $current = $this->first;
                while ($current->next !== NULL) {
                    if ($current->data === $value) {
                        if($prev === NULL){
                            $this->first = $current->next;
                        }else{
                            $prev->next = $current->next;
                        }
                        $this->_count--;
                        return TRUE;
                    }
                    $prev = $current;
                    $current = $current->next;
                }
            }
            return FALSE;
        }
        function removeAll($value){
            $prev = NULL;
            if ( $this->first !== NULL ) {
                $this->head = $this->first;
                while ($this->head !== NULL) {
                    if($this->head->data === $value) {
                        if($prev === NULL){
                            $this->first = $this->head->next;
                        }else{
                            $prev->next = $this->head->next;
                        }
                        $this->_count--;
                    }
                    $prev = $this->head ;
                    $this->head  = $this->head ->next;
                }
                return TRUE;
            }
            return FALSE;
        }
        function contains($value){
            $this->head = $this->first;
            while($this->head != NULL) {
                if($this->head->data == $value){
                    return true;
                }
                $this->head = $this->head->next;
            }
            return false;
        }
        function clear(){
            $this->first = null;
            $this->_count = 0;
        }
        function count(){
            return $this->_count;
        }
        function toString(){
            $this->head = $this->first;
            $res = "";
            if($this->head != NULL){
                while($this->head  != NULL){
                    if($this->head->next == NULL){
                        $res .= $this->head->data;
                        $this->head  = $this->head->next;
                    }else{
                        $res .= $this->head->data.", ";
                        $this->head  = $this->head->next; 
                    }
                }
            }
            return $res;
        }
        function getIterator(){
            $this->head = $this->first;
            $array = [];
            $i = 0;
            while($this->head != NULL){
                $array[$i] = $this->head->data;
                $this->head  = $this->head->next;
                $i++;
            }
            return new ArrayIterator($array);
        }
    }
?>