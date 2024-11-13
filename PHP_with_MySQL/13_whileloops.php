<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops</title>
</head>
<body>
    <?php 
    $i=1;
    while($i<=12){
        echo $i."<br>";
        $i++;
    }
    echo "I is now {$i}";
    
    
    ?>
    <br><br><hr>


    <?php 
    $i=1;
    while($i<=12){
        echo "12 x ". $i . ": " . 12*$i."<br>";
        $i++;
    }
    
    
    ?>
    
    <br><br><hr>


<?php 
$i=1;
while($i<=12){
    echo "12 x {$i} : " . 12*$i."<br>";
    $i++;
}


?>

</body>
</html>