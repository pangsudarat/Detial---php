<?php 

    $price = "3000.33";
    $daliverry=50.00;

    $total = $price + $daliverry;
    // casting
   echo "ก่อนแปลง =".gettype($total)."<br>";
    echo ($total);
    echo "<br>";
    $total = (integer)$total;
   echo "หลังแปลง =".gettype($total)."<br>";
    
    echo "<hr>";
    $a = (integer)10.90;
    $b = (integer)20.30;

    $c = $a+$b ;
    echo $c;
?>