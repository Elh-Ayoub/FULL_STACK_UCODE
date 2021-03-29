<?php
namespace Space\Normal;
use \Datetime;

function calculate_time()
{
    $from = new DateTime("1939-01-01");
    $time = $from->diff(new DateTime("now"));
    $year = $time->format("%Y");
    $month = $time->format("%m");
    $day = $time->format("%d");
    echo "<!DOCTYPE html>
<html>\n
<head>
    <meta charset=\"utf-8\">
    <title>Normal space</title>
</head>\n
<body>
    <p>In real life you were absent for $year years, $month months, $day days</p></body>\n
</html>\n";

}

?>