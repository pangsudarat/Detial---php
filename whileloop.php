
<?php 
    $count =1;
    $limit =10;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <ul>
        <?php while($count<=$limit){?>
             <li><?php echo $count;?></li> 
        <?php
            $count++;
    }
        ?>
    </ul>

    
    <?php 
    $count = 1;
    $limit =10;

    while($count<=$limit){
        echo "ชื่อที่ =".$count . "<br>";
        $count++;
    }

?>

</body>
</html>
