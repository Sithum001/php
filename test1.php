<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="test.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username"><br>
        <label for="">password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    
</body>
</html>

<?php
foreach($_POST as $key=>$value){
    echo"{$key} ={$value} <br>";

}

if(isset($_POST["submit"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username)){
        echo"user name is empty";
    }
    else{
        if(empty($password)){
            echo"password is empty";
        }
        else{
            echo"username={$username}and password={password}";
        }
    }
}
?>