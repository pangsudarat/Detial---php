<?php 

    // พื้นที่ =  กว้าง * ยาว

   /* $width = 30;
    $height = 30;

    if($width>0 && $width<=$height){
        $area = $width * $height;
    }else{
        echo "ต้องป้อนค่ามากกว่าศูนย์ <br>";
    }
    echo "พื้นที่สีเหลี่ยม =". $area .= "ตารางนิ้ว" ;*/

    $score = 20;
    $grade = "";
    
    if($score>=80){
        echo "เกรด A";
    }else if($score>=70){
        echo " เกรด B";
    }
    else if($score>=60){
        echo " เกรด C";
    }else if($score >=50){
        echo "เกรด D";
    }
    else{
        echo "เกรด F ";
    }
    echo "คะแนนของคุณที่ได้ =" . $score ;
?>