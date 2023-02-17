<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category </title>
</head>
<body>
    <a href="category.php?cat=Film">Film</a> | 
    <a href="category.php?cat=story">Story</a> | 
    <a href="category.php?cat=books">Books</a> 

<?php

if(isset($_GET["cat"])){
    $cat=$_GET['cat'];
    echo "You have choose $cat.";
}
else{
    echo "You have not choose any category";
}
?>
    
</body>
</html>
