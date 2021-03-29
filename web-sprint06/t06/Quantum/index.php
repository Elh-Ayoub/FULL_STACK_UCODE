<?php
namespace Space\Quantum;
use \Datetime;
function calculate_time()
{   
    $from = new DateTime("1939-01-01");
    $dif = $from->diff(new DateTime("now"));
    $year = 0;
    for($i = 0; $i<$dif->format("%Y"); $i++){
        if($i % 7 == 0)
            $year++;
    }
    $month = $dif->format("%m") + 6;
    $day = $dif->format("%d");
    echo "<!DOCTYPE html>
<html>\n
<head>
    <meta charset=\"utf-8\">
    <title>Quantum space</title>
</head>\n
<body>
    <p>In quantum life you were absent for $year years, $month months, $day days</p></body>\n
</html>\n";
}
?>