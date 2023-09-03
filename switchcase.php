<?php 

    /*$month = ""; 

    switch($month){
        case 1: echo "เดือนมกราคม";
            break;
        case 2: echo "เดือนกุมภา";
            break;
        case 3: echo "เดือนมีนา";
            break;    
        default : 
            echo "ไม่พบเดือน";
    }*/

    $year = 10;

    switch($year){
        case 5: 
            echo "ระยะกู้เงิน =" . $year ."ปี ดอกเบี้ย 5%" ;
            break;
        case 10: 
             echo "ระยะกู้เงิน =" . $year ."ปี ดอกเบี้ย 10%" ;
             break;
        default:
            echo "ไม่เข้าเงื่อนไขที่กำหนด" ;
    }
?>