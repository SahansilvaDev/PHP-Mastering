<?php  require_once('inc/connection.php'); ?>
<?php 

/*

DELETE FROM table_name
WHERE column_name = value
LIMIT 1 --- when DELETE one record


*/

$query = "DELETE FROM user WHERE id =4 LIMIT 1 ";

$result_set = mysqli_query($connection,$query);


//mysqli_affected_rows() = returns number of rows affected

if($result_set){
    echo mysqli_affected_rows($connection). " record DELETED";
}else {
    echo "database query failed";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE QUERY</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection); ?>