<?php 

    $price = 50 ; // integer
    $score = 96.0 ;//double
    $float = 112.00 ;//float

    $name = "This is php"; // string
    $firstname = "nick";
    $isvalid = false; //boolean
    $price = $price+150;

    echo $price . "<br>";
    echo $isvalid;
    echo $name . "<br>";
    echo $float . "<br>";
    echo $score . "<br>";
    echo $firstname . $name ;
    
    echo "<hr>";
    echo gettype($price)."<br>";
    echo gettype($score)."<br>";
    echo gettype($isvalid)."<br>";

    echo "<hr>";

    settype($score, "float");

?>
