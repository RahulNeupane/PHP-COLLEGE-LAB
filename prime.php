<?php 
    function prime($num){
        if($num <= 1){
            return 0;
        }
        $count = 0;
        for($i = 1; $i <= $num; $i++){
            if($num % $i == 0){
                $count++;
            }
        }

        return $count;
    }


    $num = 2;
    $flag = prime($num);
    if($flag == 2){
        echo "$num is a prime number";
    }else{
        echo "$num is not a prime number";
    }
?>