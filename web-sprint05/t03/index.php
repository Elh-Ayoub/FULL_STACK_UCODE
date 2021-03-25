<?php 
    function firstUpper($str){
        if (gettype($str) == "string"){
            $str = trim($str, " ");
            $str = strtolower($str);
            $str = ucfirst($str);
        }
        return $str;
    }
    echo('"    testing String    " :' . firstUpper("    testing String    ")) . "\n";
?>