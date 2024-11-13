<?php 
    $connection = mysqli_connect('localhost','root','','cms');

    $query = "SELECT * FROM pages WHERE id = 1";
    $result_set = mysqli_query($connection,$query);//query result get to variable

    $result = mysqli_fetch_assoc($result_set);//to prevent sql injection get that variable into another variable function using 'mysqli_fetch_assoc'

    $content = $result['content'];//get into content varible to result varible inside a content field
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple Blog Post</title>
  <style>
    /* Basic styling  */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }
    nav {
      background-color: #333;
      color: #fff;
      padding: 1rem;
      text-align: center;
    }
    nav a {
      color: #fff;
      margin: 0 15px;
      text-decoration: none;
    }
    .container {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
    }
    h1 {
      color: #333;
      text-align: center;
    }
    .content {
      font-size: 18px;
      line-height: 1.6;
    }
    footer {
      background-color: #333;
      color: #fff;
      text-align: center;
      padding: 1rem;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    footer p a {
        color:white;
    }
  </style>
</head>
<body>


  <!-- Navigation bar -->
  <nav>
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#contact">Contact</a>
  </nav>

  <!-- Main container -->
  <div class="container">
    
    <?php  echo $content ?>


  </div>

  <!-- Footer -->
  <footer>
    <p>&copy; 2024 <a href="https://github.com/SahansilvaDev">Sahan Silva.</a> All rights reserved.</p>
  </footer>

</body>
</html>
