<?php  require_once('inc/connection.php'); ?>
<?php 

/*

UPDATE table_name
SET column_1 =  value_1, column_2 = value_2
WHERE column_name = value
LIMIT 1 --- when update one record


*/

$query = "UPDATE user SET first_name = 'mevan',last_name = 'danuja', email = 'mevandanuja@gmail.com' WHERE id =3 ";

$result_set = mysqli_query($connection,$query);


//mysqli_affected_rows() = returns number of rows affected

if($result_set){
    echo mysqli_affected_rows($connection). " recorded affected";
}else {
    echo "database query failed";
}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE QUERY</title>
</head>
<body>
    
</body>
</html>
<?php mysqli_close($connection); ?>