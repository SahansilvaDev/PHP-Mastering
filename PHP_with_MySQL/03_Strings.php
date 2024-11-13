<?php 

$first_name = "saman";
$last_name = "perera";

echo $first_name." ".$last_name;

echo"<br>";


//diffrence between double and single quotes
echo"Full name : " . $first_name." ".$last_name;
echo"<br>";


echo"Full name : $first_name $last_name ";


echo"<br>";


echo'Full name : $first_name $last_name ';


echo"<br>";


echo"Full name : {$first_name} {$last_name}s ";


echo"<br>";
echo"<br>";


$first = "the five Boxing wisard" ;

$second = " jumps Quickly";


$sentence = $first;
$sentence .= $second;

echo "$sentence";






?>

<br>
 All simple: <?php echo strtolower($sentence)?>

 <br>
 All capital: <?php echo strtoupper($sentence)?>
 <br>
first letter capital: <?php echo ucfirst($sentence)?>

<br>
All first letter capital: <?php echo ucwords($sentence)?>

<br>
number of characters: <?php echo strlen($sentence)?>
<br>
search sring or character: <?php echo strstr($sentence,"jump")?>

<br>
<br>
search sring or character: <?php echo str_replace("five","seven",$sentence)?>
