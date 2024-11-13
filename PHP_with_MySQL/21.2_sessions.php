<?php 
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h3> Session 02 </h3>
    <?php 
    echo "User ID:  {$_SESSION['userid']} <br>";
    echo "First Name:  {$_SESSION['first_name']} <br>";
    
    
    ?>
</body>
</html>