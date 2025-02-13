<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post.php" method="post">
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity"><br>
        <input type="button" value="submit">
    </form>
</body>
</html>
<?php
$iteam="pizza";
$price=4.96;
$quantity=$_GET["quantit"];
$total=null;
echo"yor iteam is $iteam";
$total=$quantity*$price;
echo"Toatal=$total";
?>