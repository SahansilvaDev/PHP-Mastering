<!DOCTYPE html>
<="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
    <img src="./images/Associative_Arrays.png" alt="Associative Arrays" width="600px" height="380px"/>

<hr>
<h3>Associative Arrays</h3>

    <?php 

        $student =  array("first_name" => "dulan", "last_name" => "perera", "age" => 20 );

    ?>
<?php echo $student["first_name"]; ?> <br>
<?php echo $student["first_name"]." ".$student["last_name"]; ?>

<br>
<?php $student["age"]=24; ?>
<?php echo $student["age"]; ?>
<br>

<pre>
<?php print_r($student)?>
</pre>

</body>
</html>