<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floating point</title>
</head>
<body>
    <?php 
        $float=2.56;

    
    ?>    
    <?php echo $float; ?>    <br>  
    <?php echo $float+=5; ?>    <br>  
    <?php echo 10/3; ?>    <br>  
    <!-- we can not divide by zero -->
    <?php # echo 10/0; ?>    <br>  
  <br>  
   
    <h2>FUNCTIONS</h2>

    Round : <?php echo round($float,1); ?>    <br>  
    Round UP : <?php echo ceil($float); ?>    <br>  
    Round Down : <?php echo floor($float); ?>    <br>  

    <h2>How to check if number is an integer or a float</h2>
    <?php 
        $myfloat = 7.34; 
        $myinteger = 20; 
    
    ?>  
 <!--  in php indicate true = 1 , false = not display anything -->
    <?php echo "is {$myfloat} an integer: ". is_int($myfloat); ?>     <br>  
    <?php echo "is {$myinteger} an integer: ". is_int($myinteger); ?> 
    <br>  
    <br>  
    <?php echo "is {$myfloat} an float: ". is_float($myfloat) ; ?>     <br>  

    <?php echo "is {$myinteger} an float: ". is_float($myinteger); ?>  <br> 


    <br>  
    <br>  
    <?php echo "is {$myfloat} an Number: ". is_numeric($myfloat); ?>     <br>  
    
    <?php echo "is {$myinteger} an Number: ". is_numeric($myinteger); ?>  <br> 


</body>
</html>