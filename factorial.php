<?php
    function factorial($num){
        if($num == 1 || $num == 0){
            return 1;
        }
        else{
            return $num * factorial($num-1);
        }
    }

    $num = 5;
    $fact = factorial($num);
    echo "The factorial value of $num is $fact";

?>