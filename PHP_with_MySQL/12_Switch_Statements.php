<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <?php 

    // A- Admin , P - power user , U - user ,G - guest
    $usercode="A";
    switch ($usercode) {
        case "A":
            echo "Admin <br>";
            break;
        case "B":
            echo "power user <br>";
            break;
            
        case "U":
            echo "user <br>";
            break;
        case "G":
            echo "guest <br>";
            break;
        default:
            echo "invalid user code <br>";
            break;
    }
    ?>



<hr><br><br>

    <?php 
    $month="9";
    switch($month) {
        case 1: echo "jan"; break;
        case 2: echo "feb"; break;
        case 3: echo "mar"; break;
        case 4: echo "apr"; break;
        case 5: echo "may"; break;
        case 6: echo "jun"; break;
        case 7: echo "jul"; break;
        case 8: echo "aug"; break;
        case 9: echo "sep"; break;
        case 10: echo "oct"; break;
        case 11: echo "nov"; break;
        case 12: echo "dec"; break;
        default: echo "invalid month";break;
    }


    ?>




</body>
</html>