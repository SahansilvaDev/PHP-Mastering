<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>

    <?php 
        $mynumbers = array(12,213,344,52,54,34,23,12,30,24);    
    ?>

    Maximam value: <?php echo max($mynumbers); ?><br>
    Minimum value: <?php echo min($mynumbers); ?><br>
    count : <?php echo count($mynumbers); ?><br>
    
    
    
    sort : <pre> <?php sort($mynumbers); print_r($mynumbers); ?> </pre><br>
    Reverse sort : <pre> <?php rsort($mynumbers); print_r($mynumbers); ?> </pre><br>
<hr>
    <h3>Array convert to string</h3>
<br>
    implode:
    <?php 
        $string = implode(" | ",$mynumbers);
        echo $string;
    ?>
<br>
<hr>
<h3> string values convert to Array</h3>
explode:
    <?php 
        $newarray = explode(" | ",$string);
        print_r($newarray);
    ?>

<br>
<pre>explode:
<?php  print_r($newarray);?>
</pre>

<br>
Search:<?php echo in_array(344,$mynumbers)?> <br>
Search:<?php echo in_array(15,$mynumbers)?> <br>


</body>
</html>