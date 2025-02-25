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
    echo" hello {$username}";

    $userinput = filter_input(INPUT_POST,"username",FILTER_SANITIZE_SPECIAL_CHARS );
    $age = filter_input(INPUT_POST,"age",FILTER_SANITIZE_NUMBER_INT);
    $email= filter_input(INPUT_POST,"email" ,FILTER_SANITIZE_EMAIL);
    $email=filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo"please enter valid email adress";
    }
    else
    echo "Your email is: {$email} ";
    



}



?>