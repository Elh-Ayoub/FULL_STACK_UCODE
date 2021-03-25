<?php 
    class StrFrequency{
        public $string;
        function __construct($string) {
            $this->string = $string;
        }
        function letterFrequencies(){
            $this->string = strtoupper($this->string);
            global $SIZE;
            $n = strlen($this->string);
            // 'freq[]' implemented as hash table
            $freq = array_fill(0, $SIZE, NULL);
            for ($i = 0; $i < $n; $i++){
                $freq[ord($this->string[$i]) - ord('a')]++;
            }
            $arr = array();
            for ($i = 0; $i < $n; $i++)
            {
                
                if ($freq[ord($this->string[$i]) - ord('a')] != 0 && ctype_alpha($this->string[$i])){
                    $arr += [$this->string[$i] => $freq[ord($this->string[$i]) - ord('a')]];
                    $freq[ord($this->string[$i]) - ord('a')] = 0;
                }
            }
            ksort($arr);
            return $arr;
        }
        function wordFrequencies(){
            return array_count_values(str_word_count(strtoupper($this->string), 1));
        }
        function reverseString(){
            $new_str = "";
            for ($i = 0; $i < strlen($this->string); $i++){
                if(ctype_alpha($this->string[$i])){
                    $new_str .= $this->string[$i];
                }else{
                    $new_str .= " ";
                }
            }
            return strrev($new_str);
        }
    }
    // $obj= new StrFrequency("Test test 123 45 !0 f   HeLlO wOrLd");
    // $symbol= $obj->wordFrequencies();
    // echo"Words in ". $obj->string. "\n";
    // foreach($symbol as $k => $v) {
    //     echo"Word ". $k . " is repeated ". $v . " times\n";
    // }
    // echo "Reverse the string: ". $obj->string. "\n";
    // echo $obj->reverseString() . "\n";
?>