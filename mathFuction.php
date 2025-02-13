<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mathFunction.php" method="post">
    <label for="quntity">quantity:</label>
    <input type="text" name="quantity"><br>
    <input type="submit">
    </form>
</body>
</html>

<?php
$quantity=$_POST["quantity"];
echo $quantity;


?>



