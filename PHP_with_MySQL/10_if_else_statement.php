<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if - else Statements</title>
</head>
<body>
    <?php 
        $avg_score=40;

        if($avg_score>=40){
            echo "You are qualified";
        }else {
            echo "please try again";
        }
    
    ?>
<hr>

<br>

<?php 
        $avg_score=20;

        if($avg_score>=70){
            echo "You are qualified Grade A";
        }else if ($avg_score>=40){
            echo "You are qualified Grade B";
        }else {
            echo "please try again";
        }
    
    
    ?>

<br><hr>



<?php 

//else if write in combine like elseif
        $avg_score=80;

        if($avg_score>=70){
            echo "You are qualified Grade A";
        }elseif ($avg_score>=40){
            echo "You are qualified Grade B";
        }else {
            echo "please try again";
        }
    
    
    ?>








</body>
</html>