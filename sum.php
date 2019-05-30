<?php
    function sumBigNumber($value)
    {
        echo array_sum($value);
    }
    
    $array = array(1000000001, 1000000002, 1000000003, 1000000004, 1000000005);
    sumBigNumber($array);
?>
