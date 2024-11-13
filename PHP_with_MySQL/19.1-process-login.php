<?php 


print_r($_POST);
echo "<br>";


$username = $_POST['username'];
$password = $_POST['password'];

if ($username =='nuran' && $password == 'password'){
    echo "Login Successful";
}else{
    echo "invalid Username or Password";
}


?>
