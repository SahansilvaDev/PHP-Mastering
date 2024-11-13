<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booleans</title>
</head>
<body>
    <?php 
        $var1 = true;
        $var2 = false;
        $var3 = "book";
    
    ?>


<?php echo "Variable 1 (ture): " .$var1; ?><br>
<?php echo "Variable 2 (false): " .$var2; ?><br>
<br>

<?php echo " is Variable 1 boolean ? " .is_bool($var1); ?><br>
<?php echo " is Variable 2 boolean ? " .is_bool($var2); ?><br>


<?php echo " is Variable 3 boolean ? " .is_bool($var3); ?><br>

<?php 
    if ($var2== false) { echo"Variable 2 is false";}


?>






</body>
</html>