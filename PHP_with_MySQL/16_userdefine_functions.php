<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User-Defined Functions</title>
</head>
<body>

<?php        
    
    function get_month_name($monthval=0){
        
        switch($monthval) {
            case 1: $month_name=  "jan"; break;
            case 2: $month_name=  "feb"; break;
            case 3: $month_name=  "mar"; break;
            case 4: $month_name=  "apr"; break;
            case 5: $month_name=  "may"; break;
            case 6: $month_name=  "jun"; break;
            case 7: $month_name=  "jul"; break;
            case 8: $month_name=  "aug"; break;
            case 9: $month_name=  "sep"; break;
            case 10: $month_name=  "oct"; break;
            case 11: $month_name=  "nov"; break;
            case 12: $month_name=  "dec"; break;
            default: $month_name=  "invalid month";break;
        }
        return $month_name;
    
    }echo get_month_name(9);
    echo "<br>";
    echo get_month_name(1);
    echo "<br>";
    echo get_month_name();
    ?>

    <hr>
     <h3>Multiple parameters</h3><br>
     <br>
<?php 
    function get_month($month=0,$yearval=2016){
        
        switch($month) {
            case 1: $month_n=  "jan"; break;
            case 2: $month_n=  "feb"; break;
            case 3: $month_n=  "mar"; break;
            case 4: $month_n=  "apr"; break;
            case 5: $month_n=  "may"; break;
            case 6: $month_n=  "jun"; break;
            case 7: $month_n=  "jul"; break;
            case 8: $month_n=  "aug"; break;
            case 9: $month_n=  "sep"; break;
            case 10: $month_n=  "oct"; break;
            case 11: $month_n=  "nov"; break;
            case 12: $month_n=  "dec"; break;
            default: $month_n=  "invalid month";break;
        }
        return $yearval." ".$month_n;
    
    }

    echo get_month(9,2020);
    echo "<br>";

    echo get_month(9);
    echo "<br>";


    echo "<hr>";


    ?>

    <br><h3>Variable scope</h3>
<br>

    <?php
    //outside function variable can not access in function, 
    //if you want to access outside variable need to be add keyword "global"

    $domain_name= "php";
    echo "Outside Fucntion Variable: {$domain_name} <br>";
    myfunc();



    function myfunc(){
    global $domain_name;

    echo "Inside Fucntion Variable : {$domain_name} <br>";

    $domain_name= "html"; // if change inside variable using 'global' keyword then also affect outside variable also

    }

    echo "Outside Fucntion Variable: {$domain_name} <br>";


    ?>
</body>
</html>