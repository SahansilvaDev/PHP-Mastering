<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Links / URLs & GET Method</title>
</head>
<body>
<!--    
static website -  do - give user to information


if we want to get information from user we have to use php
3 ways have,

01 Links / URLs  -  GET   Requests  - get super global variable - $_GET

 02 Web Forums   - POST   Requests

03 Browser Cookies - Cookies

-->

<h1>Home page</h1>

<a href="news.php?news_item=32">Read news item 1</a><br>

<!--two or more  parameters using "&"-->
<a href="news.php?news_item=32&category=sports">Read news item 1</a><br>


<?php 
    $news_item = 312;
    $category="sport";


?>
    <a href="news.php?news_item=<?php echo $news_item; ?>&category=<?php echo $category; ?>">Read news item 2</a>

<hr><br><br>




<h3>more clear to use url variable</h3>
<?php 
    $news_item = 13120;
    $category=urlencode("esport &  sports");

    $url = "news.php?news_item={$news_item} &category={$category} "
?>
    <a href="<?php echo $url ?>">Read news item 3</a>


</body>
</html>