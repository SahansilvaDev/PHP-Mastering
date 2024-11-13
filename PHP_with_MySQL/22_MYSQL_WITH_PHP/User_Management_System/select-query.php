<?php  require_once('inc/connection.php'); ?>
<?php 

    //$query = "SELECT * FROM user ";
    $query = "SELECT id,first_name, last_name,email  FROM user ";
    $result_set = mysqli_query($connection,$query);

    
if($result_set){
    //checking how many record returned from the query
    echo mysqli_num_rows($result_set)." records found <hr>";
    //echo "Query successful";

    $table = '<table>';
    $table .= '<tr><th>Id</th><th>first name</th><th>last name</th><th>email</th></tr>';
    
   while ( $record = mysqli_fetch_assoc($result_set)){
        $table .= '<tr>';
        $table .= '<td>'. $record['id'] .'</td>';
        $table .= '<td>'. $record['first_name'] .'</td>';
        $table .= '<td>'. $record['last_name'] .'</td>';
        $table .= '<td>'. $record['email'] .'</td>';
        $table .= '</tr>';
   }

   $table .= '</table>';

}else {
    echo "database query failed";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Query</title>
</head>
<body>
    <?php echo $table; ?>

    <style>
            table {border-collapse: collapse;}
            th, td {border: 1px solid black; padding: 10px;}
    </style>  



</body>
</html>
<?php mysqli_close($connection); ?>