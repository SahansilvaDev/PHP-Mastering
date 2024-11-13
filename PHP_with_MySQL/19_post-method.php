<?php 


print_r($_POST);
echo "<br>";
//the user has pressed submit button
 if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username =='nuran' && $password == 'password'){
            echo "Login Successful";
        }else{
            echo "invalid Username or Password";
        }
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>
    <h3>Passing data using POST Method</h3>
    <hr>
    <h3>pass to data within page</h3>
    
    <form action= "19_post-method.php" method="post">
            Username : <input type="text" name="username" id=""><br>
            Password : <input type="password" name="password" id=""><br>
            <input type="submit" value="Login" name="submit">
    </form>











    <hr>

    <h3>pass to data another page</h3>
    <form action= "19.1-process-login.php" method="post">
            Username : <input type="text" name="username" id=""><br>
            Password : <input type="password" name="password" id=""><br>
            <input type="submit" value="Login" name="submit">
    </form>


</body>
</html>