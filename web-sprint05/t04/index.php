 <?php 
    function total($addCount, $addPrice, $currentTotal = 0){
        $currentTotal += ($addCount * $addPrice);
        return $currentTotal;
    }
 ?>