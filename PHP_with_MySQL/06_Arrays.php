
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    
    
    
    
    <?php
    // index starting with zero
                    //(     0  ,    1   ,   2    , 3   )
        $mycars = array("toyota","nissan","bmw","benz");
        echo $mycars[3];
    ?>
    <br>
    <h3>Before</h3>
    <?php print_r($mycars); ?>     <br>

    <pre>
    <?php print_r($mycars); ?>   
    </pre>

    <br>
<hr>
    <h3>After</h3>
    <?php $mycars[4]= "suzuki"; ?>   
    <?php $mycars[]= "Mazda"; ?>  
    <?php $mycars[1]= "honda"; ?>  


    <?php print_r($mycars); ?>     <br>

    <pre>
    <?php print_r($mycars); ?>   
    </pre>

<hr>
    <h3>Adding Numbers and Array with array</h3>
    <?php
    
        $mycars = array(10,20,"toyota","nissan",array("black",50,"white","blue"),"bmw","benz");
        echo $mycars[5];
    ?>
     <br>
    <pre>
    <?php print_r($mycars); ?>   
    </pre>
    <h6>change array value in array</h6>
    <?php $mycars[4][1]="red"; ?>   

    <pre>
    <?php print_r($mycars); ?>   
    </pre>









</body>
</html>

