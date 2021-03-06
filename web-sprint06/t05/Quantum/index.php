<?php
namespace Space\Quantum;
use \Datetime;

function calculate_time()
{
    $from = new DateTime("1939-01-01");
    $now = new DateTime('now');
    $dif = date_diff($now, $from);
    $Years = 0;
    for($i = 0; $i<$dif->format("%Y"); $i++){
        if($i % 7 == 0)
            $Years++;
    }
    $Months = $dif->format("%m") + 6;
    $Days = $dif->format("%d");
    return [$Years,$Months,$Days];
}
?>