<?php 
    //setcookie(name,value,expiration)
    //time()- current time
    //(((60s*60)h * 24)D * 7)W
    //setcookie('language','sinhala',time()+60*60*24*7);
//print_r($_COOKIE);

   if (isset($_COOKIE['language'])){
    $language = $_COOKIE['language'];
    echo "selected language: {$language}";
   }
   else{
        setcookie('language','sinhala',time()+60*60*24*7);
    }



    //how to remove cookie
    //setcookie('language', NULL , -time()+60*60*24*7);//week
    setcookie('language', "" , -time()+60*60*24*7);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
   <!-- setcookie(name,value,expiration) -->








</body>
</html>