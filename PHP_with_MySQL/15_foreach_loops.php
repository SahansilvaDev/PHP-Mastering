<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loops</title>
</head>
<body>
    <?php
    //foreach($variable as $value){    code.....  }  /// variable means array
    
    $jobs =array("accounting","se","cs","ds","cc","finance","engineering");
    foreach($jobs as $job_category){
        echo $job_category."<br>";
    }
    
    ?>

    <br><br><hr><h3>    associative array    </h3>
    <?php
    //associative array
    
    $Student =array("first_name"=>"saman","last_name"=>"perera","age"=>25);
    foreach($Student as $mystudent){
        echo $mystudent."<br>";
    }
    
    ?>


<br><br><hr><h3>    associative array print with their index   </h3>
    <?php
    //associative array print with their index
    
    $Student =array("first_name"=>"saman","last_name"=>"perera","age"=>25);
    foreach($Student as $label => $mystudent){
        echo $label." => ".$mystudent."<br>";
    }
    
    ?>
</body>
</html>