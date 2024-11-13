<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Operators</title>
</head>
<body>
    <img src="./images/LogicalOperators.png" width="600" height="400"><br><br><hr><br>
    
    <h3>   AND</h3>
    <?php 

        $subject1= 60;
        $subject2= 70;
        echo "Subject 1 :".$subject1."<br>";
        echo "Subject 2 :".$subject2."<br>";


    if(($subject1>=50) && ($subject2>=50)) {
            echo "You are Pass";
        }else{
            echo "You need to pass both subjects";
        }
    ?>


<hr>

<?php 

$subject1= 40;
$subject2= 70;
echo "Subject 1 :".$subject1."<br>";
echo "Subject 2 :".$subject2."<br>";


if(($subject1>=50) && ($subject2>=50)) {
    echo "You are Pass";
}else{
    echo "You need to pass both subjects";
}
?>
<br><hr>
<h3>   OR</h3>
    <?php 

        $subject1= 60;
        $subject2= 40;
        echo "Subject 1 :".$subject1."<br>";
        echo "Subject 2 :".$subject2."<br>";


    if(($subject1>=50) || ($subject2>=50)) {
            echo "You are Pass";
        }else{
            echo "You need to pass both subjects";
        }
    ?>

<br><hr>
    <?php 

        $subject1= 40;
        $subject2= 40;
        echo "Subject 1 :".$subject1."<br>";
        echo "Subject 2 :".$subject2."<br>";


    if(($subject1>=50) || ($subject2>=50)) {
            echo "You are Pass";
        }else{
            echo "You need to pass both subjects";
        }
    ?>

<br><hr>
<h3>   NOT ( ! )</h3>
    <?php 

        $username= "gayan";
        

    if(isset($username)) {
            echo "Username is : {$username}";
        }else{
            echo "input a user name";
        }
    ?>

<br><hr>
    <?php 

        
        $username2;
    if(!isset($username2)) {
            echo "Please enter a user name";
        }
        
    ?>

<br>





</body>
</html>