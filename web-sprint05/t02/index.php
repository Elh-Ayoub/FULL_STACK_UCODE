<?php 
    function checkDivision($var1 = 1, $var2 = 60) {
        for($i = $var1; $i <= $var2; $i++){
            $tmp = "";
		    if($i % 2 == 0){
			    $tmp = " is divisible by 2";	
		    }
		    if($i % 3 == 0){
			    if($tmp == ""){
				    $tmp = " is divisible by 3";
			    }else{
				$tmp = $tmp . ", is divisible by 3";
			    }
		    }
		    if($i % 10 == 0){
			    if($tmp == ""){
				    $tmp = " is divisible by 10";
			    }else{
				    $tmp = $tmp . ", is divisible by 10";
			    }
		    }
		    if($tmp == ""){
			    $tmp = " -";
		    }
		    echo 'The number '. $i .$tmp. "\n";
	    }
    }

    checkDivision(58);
?>