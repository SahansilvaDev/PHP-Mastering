<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
<h1>News Page</h1>
<pre>
<?php 
    print_r($_GET);

    $news_items = $_GET['news_item'];
    $catogorys = $_GET['category'];



?>
</pre>
<hr><br>
<h3>Category : <?php echo $catogorys; ?></h3>
<h3>New Items : <?php echo $news_items; ?></h3>



</body>
</html>