<?php
namespace Space\Normal;
use \Datetime;

function calculate_time()
{
    $from = new DateTime("1939-01-01");
    return $from->diff(new DateTime("now"));
}

?>