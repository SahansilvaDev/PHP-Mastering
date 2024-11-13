<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loops</title>
</head>
<body>
    <?php
    // for (start;stop;step){ code..... }
    
    for ($i = 1; $i <= 12; $i++) {
        
        echo "12 x {$i} : " . 12*$i."<br>";

        
    }
    
    ?>    
<br><br>
<hr>
<?php
    // for (start;stop;step){}
    
    for ($i = 2; $i <= 12; $i++) {
        echo "<b>Number {$i}</b> <br>";
        
        for ($j = 1; $j <= 12; $j++) {
            echo "{$i} x {$j} : " . $i * $j . "<br>";
        }echo "<br>";
    }



    ?>    



</body>
</html>