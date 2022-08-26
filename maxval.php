<?php
    $arr = array(1,2,3,56,32,10,23,5);
    $max = $arr[0];
    for($i=0 ; $i< sizeof($arr); $i++){
        if($max<=$arr[$i]){
            $max = $arr[$i];
        }
    }

    echo "The max value is $max";

?>