<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getNpost.php"method="get">
       <label for="username">username:</label>
       <input type="text" name="username"><br>
       <label for="password">password:</label>
       <input type="text" name="password"><br>
       <input type="button" value="Log in">

    </form>
</body>
</html>
<?php

echo $_GET["username"];
echo $_GET["password"];

?>