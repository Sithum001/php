<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formValidation.php" method="post">
        Username:
        <input type="text"  name="username" ><br>
        Age:
        <input type="text"  name="age" ><br>
        Email:
        <input type="text"  name="email" ><br>
        <input type="submit" value="submit" name="submit">  

    </form>
</body>
</html>
<?php
if(isset($_POST["submit"])){
    $username =$_POST["username"];
    echo" ";

}



?>