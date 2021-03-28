<?php 
    class LLItem{
        public $data;
        public $next;
        function __construct($data = NULL){
            $this->data = $data;
            $this->next = NULL;
        }
    }
?>