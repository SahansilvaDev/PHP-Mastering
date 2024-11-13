<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Integers</title>
</head>
<body>
    <?php 
        $var1=30;

        $var2=40;
        

    ?>
    Basic Claculations ((10+20+$var1)* $var2/20-50):

    <?php  echo ((10+20+$var1)* $var2 /20-50); ?>

    <h2>Some useful integer functions</h2>

    square root: <?php echo sqrt(100); ?>
    <br>

    Exponential :  <?php echo pow(2,4); ?>    <br>


    Absolute value: <?php echo abs(10-20); ?>    <br>

    Modulo: <?php echo fmod(10,3); ?>    <br>

    Randome Number generate: <?php echo rand(); ?>    <br>

    Randome Number generate with in range: <?php echo rand(10,100); ?>    <br>

    
    <h2>Increment / Decrement</h2>
    
    <?php echo $var1=$var1+20; ?>    <br>
    <?php echo "30+20 : {$var1}"; ?>    <br>  

    <!-- other way to do incremnet  -->  
     
     <?php 
        $var1=30;        

    ?>
    Addition: <?php $var1+=20; echo "var1+=20 : {$var1}"; ?>    <br>  

        <!-- Decrement  -->  
    <?php 
        $var1=30;        

    ?>
    <?php echo $var1=$var1-20; ?>    <br>
    <?php echo "30-20 : {$var1}"; ?>    <br>  

    <!-- other way to do incremnet  -->  
     
     <?php 
        $var1=30;        

    ?>
    Substraction: <?php $var1-=20; echo "var1-=20 : {$var1}"; ?>    <br>  

    Multiplication: <?php $var1*=5; echo "var1*=5 : {$var1}"; ?>    <br>  
    
    Division: <?php $var1/=2; echo "var1/=5 : {$var1}"; ?>    <br>  

</body>


</html>