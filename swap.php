<!-- ALGORITHM -->
<!-- 
step1: assign two variables with value
step2: call a swap function and pass those values
step3: during function execution take reference of those values
step4: create a temp variable and swap value as 
        temp = x;
        x = y;
        y = temp;
step5: print out those values -->

<?php 
    $x = 30;
    $y = 28;
    
    echo "before swap x = $x and y = $y ";
    swap($x,$y);
    
    function swap(&$x,&$y){
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    
    echo "<br>after swap x = $x and y = $y ";
?>

